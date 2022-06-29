<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute as AttributeContract;
use RWC\TwitterStream\Support\Flag;

class ParameterizedAttribute implements AttributeContract
{
    public function __construct(
        public int $flags,
        public string $name,
        public array $values = [],
    ) {
    }

    public function flags(): int
    {
        return $this->flags;
    }

    public function compile(): string
    {
        return sprintf('%s%s:[%s]',
            Flag::has($this->flags, Attribute::NOT_ATTRIBUTE) ? '-' : '',
            $this->name,
            implode(' ', $this->values),
        );
    }
}
