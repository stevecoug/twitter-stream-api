<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Support\Arr;

class QuotedRawAttribute extends RawAttribute
{
    public function compile(): string
    {
        $this->raw = array_map(
            fn ($raw) => sprintf('"%s"', $raw),
            Arr::flatten($this->raw),
        );

        return parent::compile();
    }
}
