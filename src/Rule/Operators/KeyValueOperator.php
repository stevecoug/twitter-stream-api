<?php

namespace Felix\TwitterStream\Rule\Operators;

use Felix\TwitterStream\Support\Arr;
use Felix\TwitterStream\Support\Flags;

class KeyValueOperator implements Operator
{
    use Contracts\Negatable;

    public array $values;

    public function __construct(public Flags $flags, public string $name, string|array ...$values)
    {
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
