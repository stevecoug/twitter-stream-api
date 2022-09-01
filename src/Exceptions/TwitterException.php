<?php

namespace Felix\TwitterStream\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

class TwitterException extends Exception
{
    public function __construct(string $message, public array $raw = [])
    {
        parent::__construct($message);
    }

    public static function fromResponse(ResponseInterface $response): TwitterException
    {
        $decoded = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        if (array_key_exists('status', $decoded) && $decoded['status'] === 429) {
            $reset = implode('', $response->getHeader('x-rate-limit-reset'));

            if ($reset == '') {
                $reset = 'unknown';
            }

            return new self('Too many requests (reset in: ' . $reset . ').', $decoded);
        }

        return new self(json_encode($decoded['errors'][0]), $decoded);
    }

    public static function fromPayload(array $payload): TwitterException
    {
        if (array_key_exists('errors', $payload) && count($payload['errors']) > 0) {
            return new self(json_encode($payload['errors'][0]), $payload);
        }

        if (array_key_exists('status', $payload) && $payload['status'] === 429) {
            return new self('Too many requests (reset in: unknown).', $payload);
        }

        return new self(json_encode($payload), $payload);
    }
}
