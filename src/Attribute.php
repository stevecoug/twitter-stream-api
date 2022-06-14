<?php

namespace RWC\TwitterStream;

class Attribute
{
    public function __construct(
        public string $name,
        public string|array|RuleBuilder|null $value = [],
        public bool $negated = false,
        public bool $headless = false,
    ) {
    }

    public function compile(): string
    {
        if ($this->name === 'query') {
            return $this->value;
        }

        if ($this->name === 'and' || $this->name === 'or') {
            return $this->name;
        }

        if ($this->name === 'bounding_box' || $this->name === 'point_radius') {
            return sprintf('%s:[%s]', $this->name, implode(' ', $this->value));
        }

        if (is_array($this->value) && count($this->value) > 1) {
            return array_reduce($this->value, fn ($_, $item) => sprintf('%s OR %s:%s', $_, $this->name, $item));
        }

        if ($this->value instanceof RuleBuilder) {
            return '(' . $this->value->compile() . ')';
        }

        $property = is_array($this->value) ? $this->value[0] : $this->value;

        if (!$this->headless) {
            return ($this->negated ? '-' : '') . $this->name . ':' . $property;
        } else {
            return $this->name;
        }
    }
}
