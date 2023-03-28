<?php

namespace stevecoug\TwitterStream\Support;

/** @internal */
class Flags
{
    protected int $flags;

    public function __construct(int $flags)
    {
        $this->flags = $flags;
    }

    public function has(int $flag): bool
    {
        return ($this->flags & $flag) === $flag;
    }

    public function toggle(int $flag): self
    {
        $this->flags ^= $flag;

        return $this;
    }
}
