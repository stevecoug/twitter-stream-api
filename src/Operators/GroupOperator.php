<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Exceptions\CanNotNegateGroupOperator;
use Felix\TwitterStream\RuleBuilder;
use Felix\TwitterStream\Support\Flags;

class GroupOperator implements Operator
{
    /** @var callable */
    public $callable;

    public function __construct(public Flags $flags, callable $callable)
    {
        $this->callable = $callable;
    }

    public function compile(): string
    {
        if ($this->flags->has(Operator::NOT_FLAG)) {
            throw new CanNotNegateGroupOperator('Cannot negate a group operator. Negate each operator individually.');
        }

        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        $builder = new RuleBuilder();

        ($this->callable)($builder);

        return sprintf('%s(%s)', $join, $builder->compile());
    }
}
