<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Contracts\NegatableAttribute;
use RWC\TwitterStream\Support\Arr;

class ValueAttribute implements Attribute, NegatableAttribute
{
    use CanBeNegated;

    public function __construct(
        public string $name,
        public array $values,
        public bool $parameterized = true
    ) {
    }

    public function compile(): string
    {
        $values   = Arr::flatten($this->values);
        $buffer   = '';
        $negation = $this->negated ? '-' : '';

        foreach ($values as $i => $value) {
            if ($i === 0) {
                $buffer .= sprintf('%s%s:%s', $negation, $this->name, $value);
                continue;
            }

            $buffer .= sprintf(' %s%s%s:%s', $this->parameterized ? 'OR ' : '', $negation, $this->name, $value);
        }

        return $buffer;
    }
}
