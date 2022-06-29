<?php

namespace RWC\TwitterStream\Contracts;

interface Operator
{
    public const OR_OPERATOR  = 1 << 0;
    public const AND_OPERATOR = 1 << 1;
    public const NOT_OPERATOR = 1 << 2;
    public const IS_OPERATOR  = 1 << 3;
    public const HAS_OPERATOR = 1 << 4;

    public function compile(): string;

    public function flags(): int;
}
