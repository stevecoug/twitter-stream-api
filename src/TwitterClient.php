<?php

namespace RWC\TwitterStream;

class TwitterClient
{
    public function __construct(public Connection $connection)
    {
    }

    public function allRules(): array
    {
        $rules = $this->connection->json('GET', 'https://api.twitter.com/2/tweets/search/stream/rules');

        return array_map(fn (array $rule) => new Rule(
            $rule['value'],
            $rule['tag'] ?? null,
            $rule['id'] ?? null,
        ), $rules);
    }

    /**
     * @param Rule[] $rules
     */
    public function addRules(array $rules): self
    {
        $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'body' => json_encode([
                'add' => array_map(fn ($rule) => ['value' => $rule->value, 'tag' => $rule->tag], $rules),
            ]),
        ]);

        return $this;
    }

    // 1534798180050780160
    public function deleteRules(string ...$ids): self
    {
        $this->connection->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                'delete' => ['ids' => $ids],
            ]),
        ]);

        return $this;
    }

//    public function bulk(array $operations): array
//    {
//        $body = [];
//
//        if (array_key_exists('delete', $operations)) {
//            $body['delete'] = ['ids' => array_filter(array_map(static fn (Rule $rule) => $rule->getId(), $operations['delete']))];
//        }
//
//        if (array_key_exists('add', $operations)) {
//            $body['add'] = array_map(static fn (Rule $rule) => ['value' => $rule->getValue(), 'tag' => $rule->getTag()], $operations['add']);
//        }
//
//        return $this->request('POST', 'https://api.twitter.com/2/tweets/search/stream/rules', [
//            'headers' => [
//                'Content-Type' => 'application/json',
//            ],
//            'body' => json_encode($body),
//        ]);
//    }
//
//    public function create(string $name, ?string $tag = null): self
//    {
//        $rule = new self($name, $tag);
//        $rule->save();
//
//        return $rule;
//    }
//
//    public function save(): array
//    {
//        $results = static::addBulk($this);
//
//        if (array_key_exists('data', $results)) {
//            $this->withId($results['data'][0]['id']);
//        }
//
//        return $results;
//    }
//
//    public function addBulk(self ...$rules): array
//    {
//        return static::bulk(['add' => $rules]);
//    }
//
//
//    public function delete(): array
//    {
//        return $this->deleteBulk($this);
//    }
//
//    public function deleteBulk(self ...$rules): array
//    {
//        if (empty($rules)) {
//            return [];
//        }
//
//        return static::bulk(['delete' => $rules]);
//    }
}
