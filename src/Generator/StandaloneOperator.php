<?php

namespace RWC\TwitterStream\Generator;

class StandaloneOperator
{
    public string $valueAsMethodName;
    public string $nameAsMethodName;

    public function __construct(public string $name, public string $value)
    {
        $this->nameAsMethodName  = ucfirst($name);
        $this->valueAsMethodName = ucfirst($this->value);
    }

    public function tests(): array
    {
        return [
            [$this->name . $this->valueAsMethodName, [], "{$this->name}:{$this->value}"],
            ["{$this->name}Not{$this->valueAsMethodName}", [], "-{$this->name}:{$this->value}"],
            ["{$this->name}Not{$this->valueAsMethodName}", [], "-{$this->name}:{$this->value}"],
            ["or{$this->nameAsMethodName}{$this->valueAsMethodName}", [], "or {$this->name}:{$this->value}"],
            ["or{$this->nameAsMethodName}Not{$this->valueAsMethodName}", [], "or -{$this->name}:{$this->value}"],
            ["and{$this->nameAsMethodName}{$this->valueAsMethodName}", [], "and {$this->name}:{$this->value}"],
            ["and{$this->nameAsMethodName}Not{$this->valueAsMethodName}", [], "and -{$this->name}:{$this->value}"],
        ];
    }

    public function methods(): array
    {
        return [
            $this->name . $this->valueAsMethodName,
            $this->name . 'Not' . $this->valueAsMethodName,
            'or' . $this->nameAsMethodName . $this->valueAsMethodName,
            'or' . $this->nameAsMethodName . 'Not' . $this->valueAsMethodName,
            'and' . $this->nameAsMethodName . $this->valueAsMethodName,
            'and' . $this->nameAsMethodName . 'Not' . $this->valueAsMethodName,
        ];
    }
}
