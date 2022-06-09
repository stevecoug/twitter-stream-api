<?php

namespace RWC\TwitterStream;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class Connection
{
    private Client $client;

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

    public function request(string $method, string $uri = '', array $options = []): ResponseInterface
    {
        return $this->client->request($method, $uri, $options);
    }
}
