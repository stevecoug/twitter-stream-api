<?php

namespace RWC\Phirehose;

use Generator;
use GuzzleHttp\Client;
use Psr\Http\Message\StreamInterface;

class TwitterStream
{
    protected Client $httpClient;
    protected ?StreamInterface $streamConnection = null;

    public function __construct(
        protected string $bearerToken,
        protected string $apiKey,
        protected string $apiSecretKey,
    ) {
        $this->httpClient = new Client([
            'headers' => [
                'Authorization' => "Bearer {$this->bearerToken}",
            ],
        ]);
        Rule::useHttpClient($this->httpClient);
    }

    public function filteredTweets(): Generator
    {
        $this->streamConnection = $this->connectToFilteredStream();

        while (!$this->streamConnection->eof()) {
            $char  = $this->streamConnection->read(1);
            $tweet = $char;

            while ($char !== "\n") {
                $char = $this->streamConnection->read(1);
                $tweet .= $char;
            }

            yield json_decode($tweet);
        }
    }

    protected function connectToFilteredStream(): StreamInterface
    {
        return $this->httpClient->get('https://api.twitter.com/2/tweets/search/stream?tweet.fields=created_at&expansions=author_id&user.fields=created_at', [
            'stream' => true,
        ])->getBody();
    }

    public function __destruct()
    {
        $this->stopListening();
    }

    public function stopListening(): self
    {
        if ($this->streamConnection) {
            $this->streamConnection->close();
        }

        return $this;
    }

    public function reconnect(): self
    {
        $this->stopListening();
        $this->streamConnection = $this->connectToFilteredStream();

        return $this;
    }
}
