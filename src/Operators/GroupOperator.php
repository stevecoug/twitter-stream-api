<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\RuleBuilder;
use RWC\TwitterStream\Support\Flag;

class GroupOperator extends Operator
{
    /** @var callable */
    protected $builder;

    public function __construct(
        protected int $flags,
        callable $builder,
    ) {
        $this->builder = $builder;
    }

    public function compile(): string
    {
        $stub = new RuleBuilder();
        ($this->builder)($stub);

        if (Flag::has($this->flags, self::NOT_OPERATOR)) {
            foreach ($stub->operators as $operator) {
                $operator->setFlag($operator->flags() ^ self::NOT_OPERATOR);
            }
        }

        return '(' . $stub->compile() . ')';
    }
}
