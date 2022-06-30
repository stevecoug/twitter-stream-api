<?php

namespace RWC\TwitterStream\Operators;

class RawOperator extends Operator
{
    public function __construct(
        protected array $raw
    ) {
    }

    public function compile(): string
    {
        return implode(' ', $this->raw);
    }
}
