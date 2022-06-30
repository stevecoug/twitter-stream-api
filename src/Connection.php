<?php

namespace RWC\TwitterStream;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use RWC\TwitterStream\Exceptions\TwitterException;

class Connection
{
    protected Client $client;

    public function __construct(string $bearerToken)
    {
        $this->client = new Client([
            'headers' => [
                'Authorization' => "Bearer {$bearerToken}",
            ],
        ]);
    }

    public function client(): Client
    {
        return $this->client;
    }

    public function request(string $method, string $uri = '', array $options = []): TwitterResponse
    {
        if (is_array($options['body'] ?? null)) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body']                    = json_encode($options['body']);
        }

        try {
            return new TwitterResponse(
                $this->client->request($method, $uri, $options)
            );
        } catch (ClientException $exception) {
            throw TwitterException::fromResponse($exception->getResponse());
        }
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
