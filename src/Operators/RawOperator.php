<?php

namespace Felix\TwitterStream\Operators;

class RawOperator implements Operator
{
    public function __construct(public string $value)
    {
    }

    public function compile(): string
    {
        return $this->value;
    }
}
