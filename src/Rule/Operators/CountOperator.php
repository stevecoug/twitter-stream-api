<?php

namespace Felix\TwitterStream\Rule\Operators;

use Felix\TwitterStream\Support\Flags;

class CountOperator implements Operator
{
    use Contracts\Negatable;

    public function __construct(public Flags $flags, public string $name, public int $min, public ?int $max = null)
    {
    }

    public function compile(): string
    {
        $operator = $this->negation() . $this->name . '_count';

        if ($this->max === null) {
            return $operator . ':' . $this->min;
        }

        return $operator . ':' . $this->min . '..' . $this->max;
    }
}
