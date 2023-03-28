<?php

namespace stevecoug\TwitterStream;

class RuleManager
{
    public TwitterConnection $connection;

    public function __construct(TwitterConnection $connection)
    {
        $this->connection = $connection;
    }

    /** @return Rule[] */
    public function all(): array
    {
        $rules = $this->connection->request('GET', 'https://api.twitter.com/2/tweets/search/stream/rules');

        return array_map(fn (array $rule) => new Rule(
            $rule['value'],
            $rule['tag'] ?? null,
            $rule['id'] ?? null,
        ), $rules->getPayload()['data'] ?? []);
    }

    public function save(string $value, ?string $tag = null, bool $dryRun = false): TwitterResponse
    {
        return $this->saveMany([new Rule($value, $tag)], $dryRun);
    }

    /** @param Rule[] $rules */
    public function saveMany(array $rules, bool $dryRun = false): TwitterResponse
    {
        $dryRun = $dryRun ? '?dry_run=true' : '';

        return $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules' . $dryRun, [
            'body' => [
                'add' => array_map(fn ($rule) => ['value' => $rule->value, 'tag' => $rule->tag], $rules),
            ],
        ]);
    }

    public function delete(string $id): TwitterResponse
    {
        return $this->deleteMany([$id]);
    }

    /** @param string[] $ids */
    public function deleteMany(array $ids): TwitterResponse
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

    public function validate(string $rule): array
    {
        return $this->save($rule, null, true)->getPayload();
    }
}
