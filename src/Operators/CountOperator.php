<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Operators\Contracts\Negatable;
use Felix\TwitterStream\Support\Flags;

class CountOperator implements Operator
{
    use Negatable;

    public function __construct(public Flags $flags, public string $name, public int $min, public ?int $max = null)
    {
    }

    public function compile(): string
    {
        $operator = new KeyValueOperator(
            $this->flags,
            $this->name . '_count',
            sprintf('%s%s', $this->min, $this->max ? "..{$this->max}" : '')
        );

        return $operator->compile();
    }
}
