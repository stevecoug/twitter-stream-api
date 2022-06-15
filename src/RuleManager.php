<?php

namespace RWC\TwitterStream;

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
        ), $rules);
    }

    public function create(Rule|string $value, ?string $tag = null): self
    {
        if ($value instanceof Rule) {
            return $this->createMany([$value]);
        }

        return $this->createMany([new Rule($value, $tag)]);
    }

    public function createMany(array $rules): self
    {
        $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'add' => array_map(fn ($rule) => ['value' => $rule->value, 'tag' => $rule->tag], $rules),
        ]);

        return $this;
    }

    public function delete(string $id): self
    {
        return $this->deleteMany([$id]);
    }

    public function deleteMany(array $ids): self
    {
        $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'delete' => ['ids' => $ids],
        ]);

        return $this;
    }
}
