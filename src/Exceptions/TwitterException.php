<?php

namespace RWC\TwitterStream\Exceptions;

use Exception;
use GuzzleHttp\Exception\ClientException;

class TwitterException extends Exception
{
    public static function fromClientException(ClientException $exception): void
    {
        $response = json_decode($exception->getResponse()->getBody()->getContents(), true);

        if (array_key_exists('detail', $response)) {
            $message  = $response['detail'];
        } else {
            $message = implode(PHP_EOL, array_map(fn ($error) => $error['message'], $response['errors']));
        }

        throw new self($message);
    }
}
