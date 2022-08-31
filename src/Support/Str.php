<?php

namespace Felix\TwitterStream\Support;

/** @internal */
class Str
{
    public static function snake(string $value, string $delimiter = '_'): string
    {
        $value = preg_replace('/\s+/u', '', ucwords($value));

        /* @phpstan-ignore-next-line */
        return strtolower(preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
    }

}
