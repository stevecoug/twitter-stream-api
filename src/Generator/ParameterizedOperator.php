<?php

namespace stevecoug\TwitterStream\Generator;

use stevecoug\TwitterStream\Support\Str;

/**
 * @codeCoverageIgnore (internal tool)
 *
 * @internal
 */
class ParameterizedOperator
{
    public string $name;
    public string $snakeCasedName;
    public string $nameAsMethodName;

    public function __construct(
        string $name
    ) {
        $this->name             = Str::snakeToCamel($name);
        $this->nameAsMethodName = ucfirst($this->name);
        $this->snakeCasedName   = Str::snake($this->name);
    }

    public function methods(): array
    {
        return [
            $this->name,
            "not{$this->nameAsMethodName}",
            "or{$this->nameAsMethodName}",
            "orNot{$this->nameAsMethodName}",
            "and{$this->nameAsMethodName}",
        ];
    }

    public function tests(): array
    {
        $buffer  = [];
        $singles = [['a'], [['b']]];
        $doubles = [['a', 'b'], [['a', 'b']]];

        foreach ($singles as $value) {
            $compiled = is_array($value[0]) ? $value[0][0] : $value[0];
            $buffer   = [
                ...$buffer,
                [$this->name, $value, "{$this->snakeCasedName}:{$compiled}"],
                ["not{$this->nameAsMethodName}", $value, "-{$this->snakeCasedName}:{$compiled}"],
                ["or{$this->nameAsMethodName}", $value, "OR {$this->snakeCasedName}:{$compiled}"],
                ["orNot{$this->nameAsMethodName}", $value, "OR -{$this->snakeCasedName}:{$compiled}"],
                ["and{$this->nameAsMethodName}", $value, "{$this->snakeCasedName}:{$compiled}"],
                ["andNot{$this->nameAsMethodName}", $value, "-{$this->snakeCasedName}:{$compiled}"],
            ];
        }

        foreach ($doubles as $value) {
            $first  = is_array($value[0]) ? $value[0][0] : $value[0];
            $second = is_array($value[0]) ? $value[0][1] : $value[1];

            $buffer = [
                ...$buffer,
                [$this->name, $value, "{$this->snakeCasedName}:{$first} {$this->snakeCasedName}:{$second}"],
                ["not{$this->nameAsMethodName}", $value, "-{$this->snakeCasedName}:{$first} -{$this->snakeCasedName}:{$second}"],
                ["or{$this->nameAsMethodName}", $value, "{$this->snakeCasedName}:{$first} OR {$this->snakeCasedName}:{$second}"],
                ["orNot{$this->nameAsMethodName}", $value, "-{$this->snakeCasedName}:{$first} OR -{$this->snakeCasedName}:{$second}"],
                ["and{$this->nameAsMethodName}", $value, "{$this->snakeCasedName}:{$first} {$this->snakeCasedName}:{$second}"],
                ["andNot{$this->nameAsMethodName}", $value, "-{$this->snakeCasedName}:{$first} -{$this->snakeCasedName}:{$second}"],
            ];
        }

        return $buffer;
    }
}
