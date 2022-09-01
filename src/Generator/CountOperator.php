<?php

namespace Felix\TwitterStream\Generator;

use Felix\TwitterStream\Support\Str;

class CountOperator
{
    public string $snakeCasedName;

    public function __construct(public string $name)
    {
        $this->snakeCasedName = Str::snake($this->name);
    }

    public function methods(): array
    {
        return [
            "with{$this->name}Count",
            "notWith{$this->name}Count",
            "orWith{$this->name}Count",
        ];
    }

    public function tests(): array
    {
    }

}