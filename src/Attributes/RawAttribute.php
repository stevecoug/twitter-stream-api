<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute;

class RawAttribute implements Attribute
{
    public function __construct(public string $raw)
    {
    }

    public function compile(): string
    {
        return $this->raw;
    }

    public function compileNegated(): string
    {
        // todo: make a custom exception
        throw new \Exception('RawAttribute cannot be negated');
    }
}
