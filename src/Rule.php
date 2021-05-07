<?php

namespace RWC\TwitterStream;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use RuntimeException;
use RWC\TwitterStream\Exceptions\TwitterException;

class Rule
{
    protected static ?Client $httpClient;
    protected ?string $id = null;
    protected string $value;
    protected string $tag;

    public function __construct(string $value, ?string $tag = null)
    {
        static::ensureHttpClientIsLoaded();
        $this->value = $value;
        $this->tag = $tag ?? $value;
    }

    public static function ensureHttpClientIsLoaded(): void
    {
        if (static::$httpClient === null) {
            throw new RuntimeException('You need to instantiate a TwitterStream before creating a rule or set the bearer token manually.');
        }
    }

    public static function all(): array
    {
        static::ensureHttpClientIsLoaded();
        try {
            $rules = json_decode(static::$httpClient
                ->get('https://api.twitter.com/2/tweets/search/stream/rules')
                ->getBody()
                ->getContents(), true);

            if (!array_key_exists('data', $rules)) {
                return [];
            }

            return array_map(static function ($rawRule) {
                $rule = new self($rawRule['value'], $rawRule['tag']);
                $rule->withId($rawRule['id']);

                return $rule;
            }, $rules['data']);
        } catch (ClientException $exception) {
            TwitterException::fromClientException($exception);
        }

        return [];
    }

    public function withId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public static function useHttpClient(Client $client): void
    {
        static::$httpClient = $client;
    }

    public static function useBearerToken(string $bearerToken): void
    {
        static::$httpClient = new Client([
            'headers' => [
                'Authorization' => "Bearer {$bearerToken}",
            ],
        ]);
    }

    public function add(): array
    {
        return static::addBulk($this);
    }

    public static function addBulk(self ...$rules): array
    {
        return static::bulk(['add' => $rules]);
    }

    public static function bulk(array $operations): array
    {
        static::ensureHttpClientIsLoaded();
        $body = [];
        if (array_key_exists('delete', $operations)) {
            $body['delete'] = ['ids' => array_filter(array_map(static fn(Rule $rule) => $rule->getId(), $operations['delete']))];
        }

        if (array_key_exists('add', $operations)) {
            $body['add'] = array_map(static fn(Rule $rule) => ['value' => $rule->getValue(), 'tag' => $rule->getTag()], $operations['add']);
        }

        try {
            return json_decode(static::$httpClient->post('https://api.twitter.com/2/tweets/search/stream/rules', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => json_encode($body),
            ])->getBody()->getContents(), true);
        } catch (ClientException $exception) {
            TwitterException::fromClientException($exception);
        }

        return [];
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function delete(): array
    {
        return static::deleteBulk($this);
    }

    public static function deleteBulk(self ...$rules): array
    {
        return static::bulk(['delete' => $rules]);
    }
}
