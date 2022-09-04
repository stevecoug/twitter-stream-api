<?php

namespace Felix\TwitterStream\Generator;

use Felix\TwitterStream\Support\Str;

/**
 * @codeCoverageIgnore (internal tool)
 *
 * @internal
 */
class CountOperator
{
    public string $snakeCasedName;
    public string $nameAsMethodName;
    public string $name;

    public function __construct(string $name)
    {
        $this->name             = Str::snakeToCamel($name);
        $this->nameAsMethodName = ucfirst($this->name);
        $this->snakeCasedName   = Str::snake($this->name);
    }

    public function methods(): array
    {
        return [
            "with{$this->nameAsMethodName}Count",
            "notWith{$this->nameAsMethodName}Count",
            "orWith{$this->nameAsMethodName}Count",
            "andWith{$this->nameAsMethodName}Count",
        ];
    }

    public function tests(): array
    {
        return [
            ["with{$this->nameAsMethodName}Count", [1], "{$this->snakeCasedName}_count:1"],
            ["notWith{$this->nameAsMethodName}Count", [1], "-{$this->snakeCasedName}_count:1"],
            ["orWith{$this->nameAsMethodName}Count", [1], "OR {$this->snakeCasedName}_count:1"],
            ["andWith{$this->nameAsMethodName}Count", [1], "{$this->snakeCasedName}_count:1"],
            ["with{$this->nameAsMethodName}Count", [1, 2], "{$this->snakeCasedName}_count:1..2"],
            ["notWith{$this->nameAsMethodName}Count", [1, 2], "-{$this->snakeCasedName}_count:1..2"],
            ["orWith{$this->nameAsMethodName}Count", [1, 2], "OR {$this->snakeCasedName}_count:1..2"],
            ["andWith{$this->nameAsMethodName}Count", [1, 2], "{$this->snakeCasedName}_count:1..2"],
        ];
    }
}
