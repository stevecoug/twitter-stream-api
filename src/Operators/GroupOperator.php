<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\RuleBuilder;

class GroupAttribute implements \RWC\TwitterStream\Contracts\Attribute
{
    /** @var callable */
    private $builder;

    public function __construct(
        protected int $flags,
        callable $builder,
    ) {
        $this->builder = $builder;
    }

    public function flags(): int
    {
        return $this->flags;
    }

    public function compile(): string
    {
        $stub = new RuleBuilder();
        ($this->builder)($stub);

        if (($this->flags & Attribute::NOT_ATTRIBUTE) === Attribute::NOT_ATTRIBUTE) {
            foreach ($stub->attributes as $attribute) {
                if (property_exists($attribute, 'kind')) {
                    // toggle the attribute
                    $attribute->kind ^= Attribute::NOT_ATTRIBUTE;
                }
            }
        }

        return '(' . $stub->compile() . ')';
    }
}
