<?php

namespace RWC\Phirehose\Exceptions;

use Exception;

class PhirehoseException extends Exception
{
    public static function throw(string $message, array $context = []): void
    {
        throw new self(sprintf($message, ...$context));
    }
}
