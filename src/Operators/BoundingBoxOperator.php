<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Operators\Contracts\Negatable;
use stevecoug\TwitterStream\Support\Flags;

class BoundingBoxOperator implements Operator
{
    use Negatable;
    public Flags $flags;
    public $westLong;
    public $southLat;
    public $eastLong;
    public $northLat;

    public function __construct(Flags $flags, $westLong, $southLat, $eastLong, $northLat)
    {
        $this->flags = $flags;
        $this->westLong = $westLong;
        $this->eastLong = $eastLong;
        $this->southLat = $southLat;
        $this->northLat = $northLat;
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%s%sbounding_box:[%s %s %s %s]', $join, $this->negation(), $this->westLong, $this->southLat, $this->eastLong, $this->northLat);
    }
}
