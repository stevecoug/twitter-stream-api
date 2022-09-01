<?php

use Felix\TwitterStream\TwitterResponse;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Stream;

it('creates a twitter response from a PSR-7 response', function () {
    $response        = new Response(body: '{"a": 1}');
    $twitterResponse = TwitterResponse::fromPsrResponse($response);

    expect($twitterResponse->getPayload())->toBe(['a' => 1]);
});

it('checks if the response is a stream and does not decode it', function () {
    $stream = mock(Stream::class)
        ->shouldReceive('getMetadata')->with('wrapper_type')->andReturn('http')->once()
        ->shouldNotReceive('getContents')->andReturn('{}')
        ->getMock();

    TwitterResponse::fromPsrResponse(
        new Response(body: $stream)
    );
});

it("throws an error if the payload contains an 'errors' key", function () {
    $response = new Response(body: '{"errors": [{"message": "error"}]}');

    TwitterResponse::fromPsrResponse($response);
})->throws(Felix\TwitterStream\Exceptions\TwitterException::class);

it('can return the underlying guzzle response', function () {
    $twitterResponse = TwitterResponse::fromPsrResponse($response = new Response(body: '{}'));

    expect($twitterResponse->getResponse())->toBe($response);
});

it('implements the PSR-7 response interface', function () {
    $twitterResponse = TwitterResponse::fromPsrResponse($response = new Response(body: '{}'));

    expect($twitterResponse->getStatusCode())->toBe($response->getStatusCode());
    expect($twitterResponse->getReasonPhrase())->toBe($response->getReasonPhrase());
    expect($twitterResponse->getProtocolVersion())->toBe($response->getProtocolVersion());
    expect($twitterResponse->getHeader('Content-Type'))->toBe($response->getHeader('Content-Type'));
    expect($twitterResponse->getHeaderLine('Content-Type'))->toBe($response->getHeaderLine('Content-Type'));
    expect($twitterResponse->hasHeader('Content-Type'))->toBe($response->hasHeader('Content-Type'));
    expect($twitterResponse->getHeaders())->toBe($response->getHeaders());
    expect($twitterResponse->getBody())->toBe($response->getBody());
});
