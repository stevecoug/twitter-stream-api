<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute;

class RawAttribute implements Attribute
{
    public function __construct(
        public array $raw
    ) {
    }

    public function flags(): int
    {
        return 0;
    }

    public function compile(): string
    {
        return implode(' ', $this->raw);
    }
}
