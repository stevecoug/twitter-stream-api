<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute;

class ManyParametersAttribute implements Attribute
{
    public function __construct(
        public string $name,
        public array $values = [],
    ) {
    }

    public function compileNegated(): string
    {
        return '-' . $this->compile();
    }

    public function compile(): string
    {
        return sprintf('%s:[%s]', $this->name, implode(' ', $this->values));
    }
}
