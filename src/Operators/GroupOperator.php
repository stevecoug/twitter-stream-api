<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\RuleBuilder;
use RWC\TwitterStream\Support\Flag;
use SplStack;

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
            $negatedStack = new SplStack();

            while (!$stub->operators->isEmpty()) {
                $op = $stub->operators->pop();
                $op->setFlags($op->flags() === 0 ? self::NOT_OPERATOR : $op->flags() ^ self::NOT_OPERATOR);
                $negatedStack->unshift($op);
            }

            $stub->operators = $negatedStack;
        }

        return '(' . $stub->compile() . ')';
    }
}
