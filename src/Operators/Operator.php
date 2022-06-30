<?php

namespace RWC\TwitterStream\Operators;

abstract class Operator
{
    public const OR_OPERATOR  = 1 << 0;
    public const AND_OPERATOR = 1 << 1;
    public const NOT_OPERATOR = 1 << 2;
    public const IS_OPERATOR  = 1 << 3;
    public const HAS_OPERATOR = 1 << 4;

    protected int $flags;

    abstract public function compile(): string;

    public function flags(): int
    {
        return $this->flags;
    }

    public function setFlags(int $flag): self
    {
        $this->flags = $flag;

        return $this;
    }
}
