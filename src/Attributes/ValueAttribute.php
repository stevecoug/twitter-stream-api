<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute;

class ValueAttribute implements Attribute
{
    public function __construct(
        public string $name,
        public array $values = [],
    ) {
    }

    public function compile(): string
    {
        if (count($this->values) === 1) {
            if (is_array($this->values[0])) {
                return $this->name . ':' . implode(',', $this->values[0]);
            }

            return $this->name . ':' . $this->values[0];
        }

        return substr(array_reduce(
            $this->values,
            fn ($_, $item) => sprintf('%s OR %s:%s', $_, $this->name, $item),
            ''
        ), 4);
    }

    public function compileNegated(): string
    {
        if (count($this->values) === 1) {
            return '-' . $this->name . ':' . $this->values[0];
        }

        return substr(array_reduce(
            $this->values,
            fn ($_, $item) => sprintf('%s OR -%s:%s', $_, $this->name, $item),
            ''
        ), 4);
    }
}
