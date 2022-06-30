<?php

namespace RWC\TwitterStream;

use Psr\Http\Message\ResponseInterface;

class RuleManager
{
    public function __construct(public Connection $connection)
    {
    }

    /** @return Rule[] */
    public function all(): array
    {
        $rules = $this->connection->json('GET', 'https://api.twitter.com/2/tweets/search/stream/rules');

        return array_map(fn (array $rule) => new Rule(
            $rule['value'],
            $rule['tag'] ?? null,
            $rule['id'] ?? null,
        ), $rules['data'] ?? []);
    }

    public function save(Rule|string $value, ?string $tag = null): ResponseInterface
    {
        if ($value instanceof Rule) {
            return $this->saveMany([$value]);
        }

        return $this->saveMany([new Rule($value, $tag)]);
    }

    public function saveMany(array $rules): TwitterResponse
    {
        return $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'body' => [
                'add' => array_map(fn ($rule) => ['value' => $rule->value, 'tag' => $rule->tag], $rules),
            ],
        ]);
    }

    public function delete(string $id): ResponseInterface
    {
        return $this->deleteMany([$id]);
    }

    public function deleteMany(array $ids): ResponseInterface
    {
        return $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'body' => [
                'delete' => ['ids' => $ids],
            ],
        ]);
    }

    public function new(string $tag = ''): RuleBuilder
    {
        return new RuleBuilder($this, $tag);
    }
}
