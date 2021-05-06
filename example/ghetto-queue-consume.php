<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * A simple example of how you could consume (ie: process) statuses collected by the ghetto-queue-collect.
 *
 * This script in theory supports multi-processing assuming your filesystem supports flock() semantics. If you're not
 * sure what that means, you probably don't need to worry about it :)
 *
 * Caveat: I'm not sure if this works properly/at all on windows.
 *
 * See: http://code.google.com/p/phirehose/wiki/Introduction
 */
class GhettoQueueConsumer
{

    /**
     * Member attribs
     */
    protected $queueDir;
    protected $filePattern;
    protected $checkInterval;

    /**
     * Construct the consumer and start processing
     */
    public function __construct($queueDir = '/tmp', $filePattern = 'phirehose-ghettoqueue*.queue', $checkInterval = 10)
    {
        $this->queueDir = $queueDir;
        $this->filePattern = $filePattern;
        $this->checkInterval = $checkInterval;

        // Sanity checks
        if (!is_dir($queueDir)) {
            throw new ErrorException('Invalid directory: ' . $queueDir);
        }

    }

    /**
     * Method that actually starts the processing task (never returns).
     */
    public function process()
    {

        // Init some things
        $lastCheck = 0;

        // Loop infinitely
        while (true) {

            // Get a list of queue files
            $queueFiles = glob($this->queueDir . '/' . $this->filePattern);
            $lastCheck = time();

            $this->log('Found ' . count($queueFiles) . ' queue files to process...');

            // Iterate over each file (if any)
            foreach ($queueFiles as $queueFile) {
                $this->processQueueFile($queueFile);
            }

            // Wait until ready for next check
            echo 'Sleeping...';
            while (time() - $lastCheck < $this->checkInterval) {
                sleep(1);
            }

        } // Infinite loop

    } // End process()

    /**
     * Processes a queue file and does something with it (example only)
     * @param string $queueFile The queue file
     */
    protected function processQueueFile(string $queueFile): bool
    {
        echo 'Processing file: ' . $queueFile;

        // Open file
        $fp = fopen($queueFile, 'rb');

        // Check if something has gone wrong, or perhaps the file is just locked by another process
        if (!is_resource($fp)) {
            echo 'WARN: Unable to open file or file already open: ' . $queueFile . ' - Skipping.';
            return false;
        }

        // Lock file
        flock($fp, LOCK_EX);

        // Loop over each line (1 line per status)
        $statusCounter = 0;
        while ($rawStatus = fgets($fp, 8192)) {
            $statusCounter++;

            /** **************** NOTE ********************
             * This is the part where you would normally do your processing. If you're extracting/trending information
             * about the tweets it should happen here, where it doesn't matter so much if things are slow (you will
             * catch up on the next loop).
             */
            $data = json_decode($rawStatus, true, 512, JSON_THROW_ON_ERROR);
            if (is_array($data) && isset($data['user']['screen_name'])) {
                echo 'Decoded tweet: ' . $data['user']['screen_name'] . ': ' . urldecode($data['text']);
            }

        } // End while

        // Release lock and close
        flock($fp, LOCK_UN);
        fclose($fp);

        // All done with this file
        echo 'Successfully processed ' . $statusCounter . ' tweets from ' . $queueFile . ' - deleting.';
        unlink($queueFile);

    }

}

// Construct consumer and start processing
$gqc = new GhettoQueueConsumer();
$gqc->process();