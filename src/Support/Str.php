<?php

namespace RWC\TwitterStream\Support;

class Str
{
    public static function snake($value, $delimiter = '_')
    {
        $value = preg_replace('/\s+/u', '', ucwords($value));

        return strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
    }

    public static function quote(mixed $value): mixed
    {
        if (!is_string($value)) {
            return $value;
        }

        return !str_contains($value, ' ') ? $value : '"' . $value . '"';
    }
}
