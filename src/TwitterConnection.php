<?php

namespace stevecoug\TwitterStream;

use stevecoug\TwitterStream\Exceptions\TwitterException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TwitterConnection
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

    /**
     * @param array<string, mixed> $options see \GuzzleHttp\RequestOptions
     */
    public function request(string $method, string $uri = '', array $options = []): TwitterResponse
    {
        if (is_array($options['body'] ?? null)) {
            $options['headers']['Content-Type'] = 'application/json';
            $options['body']                    = json_encode($options['body']);
        }

        try {
            return TwitterResponse::fromPsrResponse(
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
