<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Exceptions\NonSemanticNegationException;

class RawAttribute implements Attribute
{
    use CanBeNegated;

    public function __construct(public string $raw)
    {
    }

    public function compile(): string
    {
        if ($this->negated) {
            throw new NonSemanticNegationException('Can not negate a raw attribute');
        }

        return $this->raw;
    }
}
