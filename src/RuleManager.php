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

    public function save(Rule|string $value, ?string $tag = null): self
    {
        if ($value instanceof Rule) {
            return $this->saveMany([$value]);
        }

        return $this->saveMany([new Rule($value, $tag)]);
    }

    public function saveMany(array $rules): self
    {
        $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'body' => [
                'add' => array_map(fn ($rule) => ['value' => $rule->value, 'tag' => $rule->tag], $rules),
            ],
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
            'body' => [
                'delete' => ['ids' => $ids],
            ],
        ]);

        return $this;
    }

    public function query(string $query = ''): RuleBuilder
    {
        return new RuleBuilder($query);
    }
}
