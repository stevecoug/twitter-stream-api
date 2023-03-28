<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Exceptions\CanNotNegateGroupOperator;
use stevecoug\TwitterStream\RuleBuilder;
use stevecoug\TwitterStream\Support\Flags;

class GroupOperator implements Operator
{
    /** @var callable */
    public $callable;
    public Flags $flags;

    public function __construct(Flags $flags, callable $callable)
    {
        $this->flags = $flags;
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
