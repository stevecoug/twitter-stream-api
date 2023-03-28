<?php

namespace stevecoug\TwitterStream\Operators;

use stevecoug\TwitterStream\Operators\Contracts\Negatable;
use stevecoug\TwitterStream\Support\Arr;
use stevecoug\TwitterStream\Support\Flags;

class KeyValueOperator implements Operator
{
    use Negatable;

    public array $values;
    public Flags $flags;
    public string $name;

    public function __construct(Flags $flags, string $name, ...$values)
    {
        $this->flags = $flags;
        $this->name = $name;
        $this->values = Arr::flatten($values);
    }

    public function compile(): string
    {
        $join = $this->flags->has(self::OR_FLAG) ? ' OR ' : ' ';

        $compiled = array_reduce(
            $this->values,
            fn ($_, $value) => "{$_}{$join}{$this->negation()}{$this->name}:{$value}",
            ''
        );

        // Remove the leading and trailing space with a ' ' join when there's one value.
        if ($join === ' ' || count($this->values) === 1) {
            return trim($compiled);
        }

        return substr($compiled, strlen($join));
    }
}
