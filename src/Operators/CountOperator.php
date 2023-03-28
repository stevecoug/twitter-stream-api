<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Operators\Contracts\Negatable;
use stevecoug\TwitterStream\Support\Flags;

class CountOperator implements Operator
{
    use Negatable;

    public Flags $flags;
    public string $name;
    public int $min;
    public $max;

    public function __construct(Flags $flags, string $name, int $min, ?int $max = null)
    {
        $this->flags = $flags;
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
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
