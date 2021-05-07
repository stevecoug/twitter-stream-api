<?php

namespace RWC\Phirehose\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;

class TwitterException extends Exception
{
    public static function fromClientException(ClientException $exception): void
    {
        $response = json_decode($exception->getResponse()->getBody()->getContents(), true);

        $message = implode(PHP_EOL, array_map(fn ($error) => $error['message'], $response['errors']));

        throw new static($message);
    }
}
