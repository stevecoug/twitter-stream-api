<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Operators\Contracts\Negatable;
use stevecoug\TwitterStream\Support\Flags;

class PointRadiusOperator implements Operator
{
    use Negatable;
    public Flags $flags;
    public string $longitude;
    public string $latitude;
    public string $radius;

    public function __construct(Flags $flags, string $longitude, string $latitude, string $radius)
    {
        $this->flags = $flags;
        $this->longitude = $longitude;
        $this->latitude = $latitude;
        $this->radius = $radius;
    }

    public function compile(): string
    {
        $join = $this->flags->has(Operator::OR_FLAG) ? 'OR ' : '';

        return sprintf('%s%spoint_radius:[%s %s %s]', $join, $this->negation(), $this->longitude, $this->latitude, $this->radius);
    }
}
