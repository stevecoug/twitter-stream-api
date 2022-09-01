<?php

use Felix\TwitterStream\Rule;
use Felix\TwitterStream\RuleBuilder;
use Felix\TwitterStream\RuleManager;
use Felix\TwitterStream\TwitterConnection;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;

function mockTwitter(&$container, string $responsePayload = '[]'): RuleManager
{
    $mock = new MockHandler([
        new Response(200, ['Content-Type' => 'application/json'], $responsePayload),
    ]);
    $history      = Middleware::history($container);
    $handlerStack = HandlerStack::create($mock);
    $handlerStack->push($history);

    $client = new Client(['handler' => $handlerStack]);

    $connection = new TwitterConnection('some token');
    $connection->setClient($client);

    return new RuleManager($connection);
}

it('can list all rules', function () {
    $requests = [];
    $manager  = mockTwitter($requests, json_encode([
        'data' => [[
            'value' => 'cats has:images',
            'tag'   => 'cat pictures',
            'id'    => '123',
        ]],
    ]));

    $rules = $manager->all();
    expect($rules)->toHaveCount(1)
        ->and($rules[0]->value)->toBe('cats has:images')
        ->and($rules[0]->tag)->toBe('cat pictures')
        ->and($rules[0]->id)->toBe('123');
    expect($requests[0]['request'])
        ->getMethod()->toBe('GET')
        ->getUri()->__toString()->toBe('https://api.twitter.com/2/tweets/search/stream/rules');
});

it('can create a rule', function () {
    $requests = [];
    $manager  = mockTwitter($requests);

    $manager->save('cats has:links', 'cats with links');

    expect($requests[0]['request'])
        ->getMethod()->toBe('POST')
        ->getUri()->__toString()->toBe('https://api.twitter.com/2/tweets/search/stream/rules')
        ->getBody()->getContents()->toBe('{"add":[{"value":"cats has:links","tag":"cats with links"}]}');
});

it('can create many rules', function () {
    $requests = [];
    $manager  = mockTwitter($requests);

    $manager->saveMany([
        new Rule('cats has:links', 'cats with links'),
        new Rule('dogs has:links', 'dogs with links'),
    ]);

    expect($requests[0]['request'])
        ->getMethod()->toBe('POST')
        ->getUri()->__toString()->toBe('https://api.twitter.com/2/tweets/search/stream/rules')
        ->getBody()->getContents()->toBe('{"add":[{"value":"cats has:links","tag":"cats with links"},{"value":"dogs has:links","tag":"dogs with links"}]}');
});

it('can delete a rule', function () {
    $requests = [];
    $manager  = mockTwitter($requests);

    $manager->delete('1234');

    expect($requests[0]['request'])
        ->getMethod()->toBe('POST')
        ->getUri()->__toString()->toBe('https://api.twitter.com/2/tweets/search/stream/rules')
        ->getBody()->getContents()->toBe('{"delete":{"ids":["1234"]}}');
});

it('can delete many rules', function () {
    $requests = [];
    $manager  = mockTwitter($requests);

    $manager->deleteMany(['1234', '5678']);

    expect($requests[0]['request'])
        ->getMethod()->toBe('POST')
        ->getUri()->__toString()->toBe('https://api.twitter.com/2/tweets/search/stream/rules')
        ->getBody()->getContents()->toBe('{"delete":{"ids":["1234","5678"]}}');
});

it('can create a new rule builder', function () {
    $requests = [];
    $manager  = mockTwitter($requests);

    $builder = $manager->new('tag');

    expect($builder->manager)->toBe($manager);
    expect($builder->tag)->toBe('tag');
});

it('can validate a rule', function () {
    $requests = [];
    $manager = mockTwitter($requests);
    $mock = mock($manager)->makePartial()
        ->shouldReceive('save')->with('cats has:links', true)->andReturn([])
        ->getMock();

    $mock->validate('cats has:links');
});
