<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\RuleBuilder;

class GroupOperator implements \RWC\TwitterStream\Contracts\Operator
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

        if (($this->flags & Operator::NOT_OPERATOR) === Operator::NOT_OPERATOR) {
            foreach ($stub->attributes as $attribute) {
                if (property_exists($attribute, 'kind')) {
                    // toggle the attribute
                    $attribute->kind ^= Operator::NOT_OPERATOR;
                }
            }
        }

        return '(' . $stub->compile() . ')';
    }
}
