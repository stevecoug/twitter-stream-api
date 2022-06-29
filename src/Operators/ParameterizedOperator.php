<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\Contracts\Operator as OperatorContract;
use RWC\TwitterStream\Support\Flag;

class ParameterizedOperator implements OperatorContract
{
    public function __construct(
        public int $flags,
        public string $name,
        public array $values = [],
    ) {
    }

    public function flags(): int
    {
        return $this->flags;
    }

    public function compile(): string
    {
        return sprintf('%s%s:[%s]',
            Flag::has($this->flags, self::NOT_OPERATOR) ? '-' : '',
            $this->name,
            implode(' ', $this->values),
        );
    }
}
