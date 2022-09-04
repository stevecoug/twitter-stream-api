<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Operators\Contracts\Negatable;
use Felix\TwitterStream\Support\Flags;

class BoundingBoxOperator implements Operator
{
    use Negatable;

    public function __construct(public Flags $flags, public int|float $westLong, public int|float $southLat, public int|float $eastLong, public int|float $northLat)
    {
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%s%sbounding_box:[%s %s %s %s]', $join, $this->negation(), $this->westLong, $this->southLat, $this->eastLong, $this->northLat);
    }
}
