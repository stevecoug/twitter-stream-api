<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Support\Flags;

class NotNullCastOperator implements Operator
{
    public Flags $flags;

    public function __construct(Flags $flags)
    {
        $this->flags = $flags;
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%s-is:nullcast', $join);
    }
}
