<?php

namespace RWC\TwitterStream\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;

class TwitterException extends Exception
{
    protected array $raw;

    public function __construct(string $message, array $raw = [])
    {
        $this->raw = $raw;

        parent::__construct($message);
    }

    public static function fromClientException(ClientException $exception): void
    {
        $response = json_decode($exception->getResponse()->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $error = $response['errors'][0];

        throw new self($error['message']);
    }
}
