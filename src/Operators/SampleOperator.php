<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Support\Flags;

class SampleOperator implements Operator
{
    public Flags $flags;
    public int $percentage;

    public function __construct(Flags $flags, int $percentage)
    {
        $this->flags = $flags;
        $this->percentage = $percentage;
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%ssample:%s', $join, $this->percentage);
    }
}
