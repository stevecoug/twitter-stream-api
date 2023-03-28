<?php

namespace stevecoug\TwitterStream\Operators\Contracts;

trait Negatable
{
    public function negation(): string
    {
        return $this->flags->has(self::NOT_FLAG) ? '-' : '';
    }
}
