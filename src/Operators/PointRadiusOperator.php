<?php

namespace Felix\TwitterStream\Operators;

use Felix\TwitterStream\Support\Flags;

class PointRadiusOperator implements Operator
{
    public function __construct(public Flags $flags, public string $longitude, public string $latitude, public string $radius)
    {
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%spoint_radius:[%s %s %s]', $join, $this->longitude, $this->latitude, $this->radius);
    }
}
