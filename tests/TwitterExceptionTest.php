<?php

use Felix\TwitterStream\Exceptions\TwitterException;
use GuzzleHttp\Psr7\Response;

it("sets the raw body from twitter's api", function () {
    $exception = new TwitterException(
        'Error message.',
        ['a' => 'b']
    );

    expect($exception->raw)->toBe(['a' => 'b']);
});

it('can create an exception from a twitter error', function () {
    $exception = TwitterException::fromResponse(
        new Response(200, [], json_encode($response = [
            'errors' => [
                $error = [
                    'value'   => 'h:m',
                    'details' => [
                        "Reference to invalid operator 'h' (at position 1).",
                        "Reference to invalid field 'h' (at position 1).",
                    ],
                    'title' => 'UnprocessableEntity',
                    'type'  => 'https://api.twitter.com/2/problems/invalid-rules',
                ],
            ],
        ]))
    );

    expect($exception)
        ->getMessage()->toBe(json_encode($error))
        ->raw->toBe($response);
});

it('can handle 429s', function () {
    $exception = TwitterException::fromResponse(
        new Response(429, ['x-rate-limit-reset' => '1234567890'], '{"status": 429}')
    );

    expect($exception)
        ->getMessage()->toBe('Too many requests (reset in: 1234567890).')
        ->raw->toBe(['status' => 429]);
});

it('can handle 429s without the rate limit reset header', function () {
    $exception = TwitterException::fromResponse(
        new Response(429, [], '{"status": 429}')
    );

    expect($exception)
        ->getMessage()->toBe('Too many requests (reset in: unknown).')
        ->raw->toBe(['status' => 429]);
});

it('can create a response from the payload alone', function () {
    $exception = TwitterException::fromPayload([
        'errors' => [
            $error = [
                'value'   => 'h:m',
                'details' => [
                    "Reference to invalid operator 'h' (at position 1).",
                    "Reference to invalid field 'h' (at position 1).",
                ],
                'title' => 'UnprocessableEntity',
                'type'  => 'https://api.twitter.com/2/problems/invalid-rules',
            ],
        ],
    ]);

    expect($exception)
        ->getMessage()->toBe(json_encode($error))
        ->raw->toBe(['errors' => [$error]]);
});

it('can handle 429s from the payload', function () {
    $exception = TwitterException::fromPayload([
        'status' => 429,
    ]);

    expect($exception)
        ->getMessage()->toBe('Too many requests (reset in: unknown).')
        ->raw->toBe(['status' => 429]);
});

it('fails gracefully if it can not create an exception from the payload', function () {
    $exception = TwitterException::fromPayload(['a' => 'b']);

    expect($exception)
        ->getMessage()->toBe('{"a":"b"}')
        ->raw->toBe(['a' => 'b']);
});