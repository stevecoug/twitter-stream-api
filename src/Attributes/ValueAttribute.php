<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Contracts\NegatableAttribute;

class ValueAttribute implements Attribute, NegatableAttribute
{
    use CanBeNegated;

    public function __construct(
        public string $name,
        public array $values,
    ) {
    }

    public function compile(): string
    {
        $buffer   = '';
        $negation = $this->negated ? '-' : '';

        foreach ($this->values as $index => $value) {
            if (is_array($value)) {
                $value = $value[0];
            }

            if ($index === 0) {
                $buffer .= sprintf('%s%s:%s', $negation, $this->name, $value);
                continue;
            }

            $buffer .= sprintf(' OR %s%s:%s', $negation, $this->name, $value);
        }

        return $buffer;
    }
}
