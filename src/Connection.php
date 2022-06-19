<?php

namespace RWC\TwitterStream;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\ResponseInterface;
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

    public function json(string $method, string $uri = '', array $options = []): array
    {
        $response = $this->request($method, $uri, $options);
        $decoded  = json_decode($response->getBody()->getContents(), true, flags: JSON_THROW_ON_ERROR);

        return $decoded['data'] ?? [];
    }

    public function request(string $method, string $uri = '', array $options = []): ResponseInterface
    {
        if (is_array($options['body'] ?? null)) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body']                    = json_encode($options['body']);
        }

        try {
            return $this->client->request($method, $uri, $options);
        } catch (ClientException $exception) {
            throw TwitterException::fromClientException($exception);
        }
    }

    public function setClient(Client $client): self
    {
        $this->client = $client;

        return $this;
    }
}
