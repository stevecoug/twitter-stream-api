<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\Support\Flag;

class ParameterizedOperator extends Operator
{
    public function __construct(
        protected int $flags,
        protected string $name,
        protected array $values = [],
    ) {
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
