<?php

namespace stevecoug\TwitterStream\Contracts;

use JsonStreamingParser\Parser;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

interface StreamManager
{
    public function stopListening(): self;

    public function createdAt(): int;

    public function timeElapsedInSeconds();

    public function tweetsReceived(): int;

    public function response(): ResponseInterface;

    public function stream(): StreamInterface;

    public function jsonParser(): Parser;
}
