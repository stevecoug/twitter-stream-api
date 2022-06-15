<?php

namespace RWC\TwitterStream;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;
use RWC\TwitterStream\Exceptions\TwitterException;

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

    public function stream(string $method, string $uri = '', array $options = []): ResponseInterface
    {
        $options['stream'] = true;

        return $this->request($method, $uri, $options);
    }

    public function request(string $method, string $uri = '', array $body = []): ResponseInterface
    {
        try {
            return $this->client->request($method, $uri, [
                'body' => json_encode($body),
            ]);
        } catch (ClientException $exception) {
            TwitterException::fromClientException($exception);
        }
    }

    public function json(string $method, string $uri = '', array $options = []): array
    {
        $response = $this->request($method, $uri, $options);
        $decoded  = json_decode($response->getBody()->getContents(), true, flags: JSON_THROW_ON_ERROR);

        return $decoded['data'] ?? [];
    }
}
