<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Exceptions\NonSemanticNegationException;
use RWC\TwitterStream\Support\Arr;

class RawAttribute implements Attribute
{
    use CanBeNegated;

    public function __construct(public string|array $raw)
    {
    }

    public function compile(): string
    {
        if ($this->negated) {
            throw new NonSemanticNegationException('Can not negate a raw attribute');
        }

        return implode(' ', Arr::flatten($this->raw));
    }
}
