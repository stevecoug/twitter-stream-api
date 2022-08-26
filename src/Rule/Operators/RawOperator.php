<?php

namespace Felix\TwitterStream\Rule\Operators;

use Felix\TwitterStream\Support\Flag;

/** @internal */
class RawOperator extends Operator
{
    /** @param scalar[] $raw */
    public function __construct(
        protected int $flags,
        protected array $raw
    ) {
    }

    public function compile(): string
    {
        $prefix = match (true) {
            Flag::has($this->flags, self::AND_OPERATOR) => 'AND ',
            Flag::has($this->flags, self::OR_OPERATOR) => 'OR ',
            default => ''
        };

        return $prefix . implode(' ', $this->raw);
    }
}
