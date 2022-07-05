<?php

namespace RWC\TwitterStream\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;

class TwitterException extends Exception
{
    protected array $raw;

    public function __construct(string $message, array $raw = [])
    {
        $this->raw = $raw;

        parent::__construct($message);
    }

    public static function fromResponse(ResponseInterface $response): TwitterException
    {
        $response = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        $error = $response['errors'][0];

        return new self($error['message'], $response);
    }

    public static function fromPayload(array $payload): TwitterException
    {
        $buffer = '';

        foreach ($payload['errors'] as $error) {
            // For errors like DuplicateRule, no details are provided.
            // For most errors related to rule creation, details are provided.
            $hasDetails = array_key_exists('details', $error);

            $errorIdOrType = $error['id'] ?? ($error['type'] ?? 'Generic Problem');

            $buffer .= sprintf("[%s] %s %s [%s]\n", $error['title'], $error['value'], $hasDetails ? ': ' . implode('; ', $error['details']) : '', $errorIdOrType);
        }

        return new self(
            $buffer,
            $payload
        );
    }
}
