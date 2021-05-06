<?php

namespace RWC\Phirehose;

use Exception;
use RWC\Phirehose\Enums\Format;
use RWC\Phirehose\Enums\Method;
use RWC\Phirehose\Exceptions\PhirehoseException;

abstract class Phirehose
{
    public const EARTH_RADIUS_KM = 6371;
    protected string $baseURL = 'https://stream.twitter.com/1.1/statuses/';
    protected string $username;
    protected string $password;
    protected string $method;
    protected string $format;
    protected int $count;
    protected array $followedUsers;
    protected array $trackWords;
    protected array $locationBoxes;
    /** @var resource|null */
    protected $conn;
    protected array $fdrPool;
    protected string $buff;
    protected bool $filterChanged;
    protected bool $reconnect;

    /** Number of seconds since the last tweet arrived (or the keep-alive newline) */
    protected int $idlePeriod = 0;
    /** The maximum value $this->idlePeriod has reached. */
    protected int $maxIdlePeriod = 0;

    /**
     * Seconds since the last call to statusUpdate()
     *
     * Reset to zero after each call to statusUpdate()
     * Highest value it should ever reach is $this->avgPeriod
     */
    protected int $avgElapsed = 0;
    protected int $connectFailuresMax = 20;
    protected int $connectTimeout = 5;
    protected int $readTimeout = 5;
    protected int $idleReconnectTimeout = 90;
    protected int $avgPeriod = 60;
    protected string $userAgent = 'Phirehose/1.0RC +https://github.com/fennb/phirehose';
    protected int $filterCheckMin = 5;
    protected int $filterUpdMin = 120;
    protected int $tcpBackoff = 1;
    protected int $tcpBackoffMax = 16;
    protected int $httpBackoff = 10;
    protected int $httpBackoffMax = 240;
    protected int $hostPort = 80;
    protected int $secureHostPort = 443;
    protected string $lang;

    /**
     * @todo I've kept the "/2/" at the end of the URL for user streams, as that is what
     *    was there before AND it works for me! But the official docs say to use /1.1/
     *    so that is what I have used for site.
     *     https://dev.twitter.com/docs/api/1.1/get/user
     *
     * @todo Shouldn't really hard-code URL strings in this function.
     */
    public function __construct(string $username, string $password, Method $method, ?Format $format = null, bool $lang = false)
    {
        if ($method->equals(Method::user())) {
            $this->baseURL = 'https://userstream.twitter.com/1.1/';
        }

        if ($method->equals(Method::site())) {
            $this->baseURL = 'https://sitestream.twitter.com/1.1/';
        }

        $this->username = $username;
        $this->password = $password;
        $this->method = $method ?? Method::sample();
        $this->format = $format ?? Format::json();
        $this->lang = $lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Returns public statuses from or in reply to a set of users. Mentions ("Hello @user!") and implicit replies
     * ("@user Hello!" created without pressing the reply button) are not matched. It is up to you to find the integer
     * IDs of each twitter user.
     * Applies to: METHOD_FILTER
     *
     */
    public function setFollow(array $userIds = []): static
    {
        sort($userIds); // Non-optimal but necessary
        if ($this->followedUsers !== $userIds) {
            $this->filterChanged = true;
        }
        $this->followedUsers = $userIds;
        return $this;
    }

    /**
     * Specifies keywords to track. Track keywords are case-insensitive logical ORs. Terms are exact-matched, ignoring
     * punctuation. Phrases, keywords with spaces, are not supported. Queries are subject to Track Limitations.
     * Applies to: METHOD_FILTER
     */
    public function setTrack(array $trackWords = []): self
    {
        sort($trackWords); // Non-optimal, but necessary
        if ($this->trackWords !== $trackWords) {
            $this->filterChanged = true;
        }
        $this->trackWords = $trackWords;
        return $this;
    }

    /**
     * Specifies a set of bounding boxes to track as an array of 4 element lon/lat pairs denoting <south-west point>,
     * <north-east point>. Only tweets that are both created using the Geotagging API and are placed from within a tracked
     * bounding box will be included in the stream. The user's location field is not used to filter tweets. Bounding boxes
     * are logical ORs and must be less than or equal to 1 degree per side. A locations parameter may be combined with
     * track parameters, but note that all terms are logically ORd.
     *
     * NOTE: The argument order is Longitude/Latitude (to match the Twitter API and GeoJSON specifications).
     *
     * Applies to: METHOD_FILTER
     *
     * See: http://apiwiki.twitter.com/Streaming-API-Documentation#locations
     *
     * Eg:
     *  setLocations(array(
     *      array(-122.75, 36.8, -121.75, 37.8), // San Francisco
     *      array(-74, 40, -73, 41),             // New York
     *  ));
     *
     * @param array $boundingBoxes
     */
    public function setLocations(array $boundingBoxes = []): self
    {
        sort($boundingBoxes); // Non-optimal, but necessary
        // Flatten to single dimensional array
        $locationBoxes = [];
        foreach ($boundingBoxes as $boundingBox) {
            // Sanity check
            if (count($boundingBox) !== 4) {
                PhirehoseException::throw('Invalid location bounding box: [%s]', [
                    implode(', ', $boundingBox)
                ]);
            }
            // Append this lat/lon pairs to flattened array
            $locationBoxes = array_merge($locationBoxes, $boundingBox);
        }
        // If it's changed, make note
        if ($this->locationBoxes !== $locationBoxes) {
            $this->filterChanged = true;
        }
        // Set flattened value
        $this->locationBoxes = $locationBoxes;
        return $this;
    }

    /**
     * Connects to the stream API and consumes the stream. Each status update in the stream will cause a call to the
     * handleStatus() method.
     *
     * Note: in normal use this function does not return.
     * If you pass $reconnect as false, it will still not return in normal use: it will only return
     *   if the remote side (Twitter) close the socket. (Or the socket dies for some other external reason.)
     *
     * @param boolean $reconnect Reconnects as per recommended
     * @see handleStatus()
     */
    public function consume(bool $reconnect = true): void
    {
        // Persist connection?
        $this->reconnect = $reconnect;

        // Loop indefinitely based on reconnect
        do {

            // (Re)connect
            $this->reconnect();

            // Init state
            $lastAverage = $lastFilterCheck = $lastFilterUpd = $lastStreamActivity = time();
            $fdw = $fde = null; // Placeholder write/error file descriptors for stream_select

            // We use a blocking-select with timeout, to allow us to continue processing on idle streams
            //TODO: there is a bug lurking here. If $this->conn is fine, but $numChanged returns zero, because readTimeout was
            //    reached, then we should consider we still need to call statusUpdate() every 60 seconds, etc.
            //     ($this->readTimeout is 5 seconds.) This can be quite annoying. E.g. Been getting data regularly for 55 seconds,
            //     then it goes quiet for just 10 or so seconds. It is now 65 seconds since last call to statusUpdate() has been
            //     called, which might mean a monitoring system kills the script assuming it has died.
            while ($this->conn !== null && !feof($this->conn) && (stream_select($this->fdrPool, $fdw, $fde, $this->readTimeout)) !== false) {
                /* Unfortunately, we need to do a safety check for dead twitter streams - This seems to be able to happen where
                 * you end up with a valid connection, but NO tweets coming along the wire (or keep alives). The below guards
                 * against this.
                 */
                if ((time() - $lastStreamActivity) > $this->idleReconnectTimeout) {
                    $this->reconnect();
                    $lastStreamActivity = time();
                    continue;
                }
                // Process stream/buffer
                $this->fdrPool = [$this->conn]; // Must reassign for stream_select()

                //Get a full HTTP chunk.
                //NB. This is a tight loop, not using stream_select.
                //NB. If that causes problems, then perhaps put something to give up after say trying for 10 seconds? (but
                //   the stream will be all messed up, so will need to do a reconnect).
                $chunk_info = trim(fgets($this->conn)); //First line is hex digits giving us the length
                if ($chunk_info === '') {
                    continue;
                }    //Usually indicates a time-out. If we wanted to be sure,
                //then stream_get_meta_data($this->conn)['timed_out']==1.  (We could instead
                //   look at the 'eof' member, which appears to be boolean false if just a time-out.)
                //TODO: need to consider calling statusUpdate() every 60 seconds, etc.

                // Track maximum idle period
                // (We got start of an HTTP chunk, this is stream activity)
                $this->idlePeriod = (time() - $lastStreamActivity);
                $this->maxIdlePeriod = ($this->idlePeriod > $this->maxIdlePeriod) ? $this->idlePeriod : $this->maxIdlePeriod;
                $lastStreamActivity = time();

                //Append one HTTP chunk to $this->buff
                $len = hexdec($chunk_info);   //$len includes the \r\n at the end of the chunk (despite what wikipedia says)
                //TODO: could do a check for data corruption here. E.g. if($len>100000){...}
                $s = '';
                $len += 2;    //For the \r\n at the end of the chunk
                while (!feof($this->conn)) {
                    $s .= fread($this->conn, $len - strlen($s));
                    if (strlen($s) >= $len) {
                        break;
                    }  //TODO: Can never be >$len, only ==$len??
                }
                $this->buff .= substr($s, 0, -2);   //This is our HTTP chunk

                //Process each full tweet inside $this->buff
                while (1) {
                    $eol = strpos($this->buff, "\r\n");  //Find next line ending
                    if ($eol === 0) {  // if 0, then buffer starts with "\r\n", so trim it and loop again
                        $this->buff = substr($this->buff, $eol + 2);  // remove the "\r\n" from line start
                        continue; // loop again
                    }
                    if ($eol === false) {
                        break;
                    }   //Time to get more data
                    $this->enqueueStatus(substr($this->buff, 0, $eol));
                    $this->buff = substr($this->buff, $eol + 2);    //+2 to allow for the \r\n
                }

                //NOTE: if $this->buff is not empty, it is tempting to go round and get the next HTTP chunk, as
                //  we know there is data on the incoming stream. However, this could mean the below functions (heartbeat
                //  and statusUpdate) *never* get called, which would be bad.

                // Calc counter averages
                $this->avgElapsed = time() - $lastAverage;
                if ($this->avgElapsed >= $this->avgPeriod) {
                    $this->heartbeat();
                    $this->statusUpdate();
                    $lastAverage = time();
                }
                // Check if we're ready to check filter predicates
                if ((time() - $lastFilterCheck) >= $this->filterCheckMin && $this->method->equals(Method::filter())) {
                    $lastFilterCheck = time();
                    $this->addFilters();
                }
                // Check if filter is ready + allowed to be updated (reconnect)
                if ($this->filterChanged === true && (time() - $lastFilterUpd) >= $this->filterUpdMin) {
                    $this->reconnect();
                    $lastFilterUpd = time();
                }

            } // End while-stream-activity

            if (function_exists('pcntl_signal_dispatch')) {
                pcntl_signal_dispatch();
            }

            // A socket error has occured
            PhirehoseException::throw(socket_strerror(socket_last_error($this->conn)));
        } while ($this->reconnect);
    }

    /**
     * Reconnects as quickly as possible. Should be called whenever a reconnect is required rather that connect/disconnect
     * to preserve streams reconnect state
     */
    protected function reconnect(): self
    {
        $reconnect = $this->reconnect;
        $this->disconnect(); // Implicitly sets reconnect to false
        $this->reconnect = $reconnect; // Restore state to prev
        $this->connect();
        return $this;
    }

    /**
     * Performs forcible disconnect from stream (if connected) and cleanup.
     */
    protected function disconnect(): self
    {
        if (is_resource($this->conn)) {
            fclose($this->conn);
        }
        $this->conn = null;
        $this->reconnect = false;
        return $this;
    }

    /**
     * Connects to the stream URL using the configured method.
     */
    protected function connect(): self
    {
        // Init state
        $connectFailures = 0;
        $tcpRetry = $this->tcpBackoff / 2;
        $httpRetry = $this->httpBackoff / 2;

        // Keep trying until connected (or max connect failures exceeded)
        do {

            // Check filter predicates for every connect (for filter method)
            if ($this->method->equals(Method::filter())) {
                $this->addFilters();
            }

            // Construct URL/HTTP bits
            $url = $this->baseURL . $this->method . '.' . $this->format;
            $urlParts = parse_url($url);

            // Setup params appropriately
            $requestParams = [];

            // Setup the language of the stream
            if ($this->lang) {
                $requestParams['language'] = $this->lang;
            }

            // Filter takes additional parameters
            if (!empty($this->trackWords) && ($this->method->equals(Method::user()) || $this->method->equals(Method::filter()))) {
                $requestParams['track'] = implode(',', $this->trackWords);
            }
            if (!empty($this->followedUsers) && ($this->method->equals(Method::filter()) || $this->method->equals(Method::site()))) {
                $requestParams['follow'] = implode(',', $this->followedUsers);
            }
            if (!empty($this->locationBoxes) && $this->method->equals(Method::filter())) {
                $requestParams['locations'] = implode(',', $this->locationBoxes);
            }
            if ($this->count !== 0) {
                $requestParams['count'] = $this->count;
            }

            /**
             * Open socket connection to make POST request. It'd be nice to use stream_context_create with the native
             * HTTP transport but it hides/abstracts too many required bits (like HTTP error responses).
             */
            $errNo = $errStr = null;
            $scheme = ($urlParts['scheme'] === 'https') ? 'ssl://' : 'tcp://';
            $port = ($urlParts['scheme'] === 'https') ? $this->secureHostPort : $this->hostPort;

            @$this->conn = fsockopen($scheme . $urlParts['host'], $port, $errNo, $errStr, $this->connectTimeout);

            // No go - handle errors/backoff
            if (!$this->conn || !is_resource($this->conn)) {
                $connectFailures++;
                if ($connectFailures > $this->connectFailuresMax) {
                    PhirehoseException::throw('TCP failure limit exceeded with %s failures. Last error: %s', [$connectFailures, $errStr]);
                }
                // Increase retry/backoff up to max
                $tcpRetry = ($tcpRetry < $this->tcpBackoffMax) ? $tcpRetry * 2 : $this->tcpBackoffMax;
                sleep($tcpRetry);
                continue;
            }

            // TCP connect OK
            // If we have a socket connection, we can attempt a HTTP request - Ensure blocking read for the moment
            stream_set_blocking($this->conn, 1);

            // Encode request data
            $postData = http_build_query(
                data: $requestParams,
                numeric_prefix: null,
                encoding_type: PHP_QUERY_RFC3986
            );

            // Do it
            $request = implode(PHP_EOL, [
                "POST " . $urlParts['path'] . " HTTP/1.1",
                "Host: " . $urlParts['host'] . ':' . $port,
                "Connection: Close\r\n",
                "Content-type: application/x-www-form-urlencoded",
                "Content-length: " . strlen($postData),
                "Accept: */*\r\n",
                'Authorization: ' . $this->getAuthorizationHeader($url, $requestParams),
                'User-Agent: ' . $this->userAgent,
                "",
                $postData,
                ""
            ]);

            fwrite($this->conn, $request);

            // First line is an HTTP response (something like GET 200 Ok)
            [$_, $httpCode, $httpMessage] = preg_split('/\s+/', trim(fgets($this->conn, 1024)), 3);

            // Response buffers
            $respHeaders = $respBody = '';
            $isChunking = false;

            // Consume each header response line until we get to body
            while ($hLine = trim(fgets($this->conn, 4096))) {
                $respHeaders .= $hLine . "\n";

                if (strtolower($hLine) !== 'transfer-encoding: chunked') {
                    continue;
                }

                $isChunking = true;
            }

            // If we got a non-200 response, we need to backoff and retry
            if ($httpCode !== 200) {
                $connectFailures++;

                // Twitter will disconnect on error, but we want to consume the rest of the response body (which is useful)
                //TODO: this might be chunked too? In which case this contains some bad characters??
                while ($bLine = trim(fgets($this->conn, 4096))) {
                    $respBody .= $bLine;
                }

                // Have we exceeded maximum failures?
                if ($connectFailures > $this->connectFailuresMax) {
                    PhirehoseException::throw('Connection failure limit exceeded with %s failures. Last HTTP error: %s: %s (%s)', [$connectFailures, $httpCode, $httpMessage, $respBody]);
                }
                // Increase retry/backoff up to max
                $httpRetry = ($httpRetry < $this->httpBackoffMax) ? $httpRetry * 2 : $this->httpBackoffMax;
                sleep($httpRetry);
                continue;
            } // End if not http 200

            if (!$isChunking) {
                throw new Exception("Twitter did not send a chunking header. Is this really HTTP/1.1? Here are headers:\n$respHeaders");
            }   //TODO: rather crude!

            // Loop until connected OK
        } while (!is_resource($this->conn) || $httpCode !== 200);

        // Connected OK, reset connect failures
        $connectFailures = 0;

        // Switch to non-blocking to consume the stream (important)
        stream_set_blocking($this->conn, 0);

        // Connect always causes the filterChanged status to be cleared
        $this->filterChanged = false;

        // Flush stream buffer & (re)assign fdrPool (for reconnect)
        $this->fdrPool = array($this->conn);
        $this->buff = '';
        return $this;
    }

    /**
     * Method called as frequently as practical (every 5+ seconds) that is responsible for checking if filter predicates
     * (ie: track words or follow IDs) have changed. If they have, they should be set using the setTrack() and setFollow()
     * methods respectively within the overridden implementation.
     *
     * Note that even if predicates are changed every 5 seconds, an actual reconnect will not happen more frequently than
     * every 2 minutes (as per Twitter Streaming API documentation).
     *
     * Note also that this method is called upon every connect attempt, so if your predicates are causing connection
     * errors, they should be checked here and corrected.
     *
     * This should be implemented/overridden in any subclass implementing the FILTER method.
     *
     * @see setTrack()
     * @see setFollow()
     */
    protected function addFilters(): void
    {
        // Override in subclass
    }

    abstract protected function getAuthorizationHeader(string $url, array $requestParams);

    /**
     * This is the one and only method that must be implemented additionally. As per the streaming API documentation,
     * statuses should NOT be processed within the same process that is performing collection
     */
    abstract public function enqueueStatus(string $status);

    public function heartbeat(): void
    {
    }

    /**
     * Called every 60 or $this->avgPeriod seconds
     */
    protected function statusUpdate(): void
    {
    }
}