<?php

namespace RWC\TwitterStream\Operators;

use RWC\TwitterStream\Support\Flag;

class DefaultOperator extends Operator
{
    public function __construct(
        protected int $kind,
        protected string $name,
        protected array $values,
    ) {
    }

    public function compile(): string
    {
        $join = match (true) {
            Flag::has($this->kind, self::OR_OPERATOR) => ' or ',
            Flag::has($this->kind, self::AND_OPERATOR) => ' and ',
            default => ' ',
        };
        $negation = Flag::has($this->kind, self::NOT_OPERATOR) ? '-' : '';
        $buffer   = array_reduce(
            $this->values,
            fn (string $_, string $value) => $_ . sprintf('%s%s%s:%s', $join, $negation, $this->name, $value),
            ''
        );

        if (count($this->values) === 1 && $join !== ' ') {
            return $buffer;
        }

        // remove the leading join character and return
        return substr($buffer, strlen($join));
    }
}
