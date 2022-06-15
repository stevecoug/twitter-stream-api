<?php

namespace RWC\TwitterStream\Attributes\Concerns;

trait CanBeNegated
{
    public bool $negated = false;

    public function markAsNegated(): self
    {
        $this->negated = true;

        return $this;
    }
}
