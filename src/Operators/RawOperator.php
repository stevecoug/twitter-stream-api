<?php

namespace stevecoug\TwitterStream\Operators;

class RawOperator implements Operator
{
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function compile(): string
    {
        return $this->value;
    }
}
