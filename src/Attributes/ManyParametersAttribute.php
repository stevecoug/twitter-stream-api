<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Contracts\NegatableAttribute;

class ManyParametersAttribute implements Attribute, NegatableAttribute
{
    use CanBeNegated;

    public function __construct(
        public string $name,
        public array $values = [],
    ) {
    }

    public function compile(): string
    {
        return sprintf('%s%s:[%s]',
            $this->negated ? '-' : '',
            $this->name,
            implode(' ', $this->values),
        );
    }
}
