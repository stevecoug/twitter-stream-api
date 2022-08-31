<?php

namespace Felix\TwitterStream\Rule\Operators;

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