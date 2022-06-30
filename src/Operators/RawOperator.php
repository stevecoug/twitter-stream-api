<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\Contracts\Operator;

class RawOperator implements Operator
{
    public function __construct(
        public array $raw
    ) {
    }

    public function flags(): int
    {
        return 0;
    }

    public function compile(): string
    {
        return implode(' ', $this->raw);
    }
}
