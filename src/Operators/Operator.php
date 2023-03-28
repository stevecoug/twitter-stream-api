<?php

namespace stevecoug\TwitterStream\Operators;

interface Operator
{
    public const NOT_FLAG = 1 << 1;
    public const OR_FLAG  = 1 << 2;
    public const AND_FLAG = 1 << 3;

    public const COUNT_FLAG = 1 << 4;
    public const IS_FLAG    = 1 << 5;
    public const HAS_FLAG   = 1 << 6;

    public const OPERATORS = [
        'or'    => self::OR_FLAG,
        'and'   => self::AND_FLAG,
        'is'    => self::IS_FLAG,
        'has'   => self::HAS_FLAG,
        'not'   => self::NOT_FLAG,

        // to support the with{Metric}Count method, we ignore 'with'
        'with'  => 0,
        'count' => self::COUNT_FLAG,
    ];

    public function compile(): string;
}
