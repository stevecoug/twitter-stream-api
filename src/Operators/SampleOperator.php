<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Support\Flags;

class SampleOperator implements Operator
{
    public function __construct(public Flags $flags, public int $percentage)
    {
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%ssample:%s', $join, $this->percentage);
    }
}
