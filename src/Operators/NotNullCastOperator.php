<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Support\Flags;

class NotNullCastOperator implements Operator
{
    public function __construct(public Flags $flags)
    {
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%s-is:nullcast', $join);
    }
}
