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

    public static function quote(mixed $value): mixed
    {
        if (!is_string($value)) {
            return $value;
        }

        // empty or without spaces? skip
        if (!str_contains($value, ' ') || strlen(trim($value)) === 0) {
            return $value;
        }

        if (str_starts_with($value, '-')) {
            $withoutNegation = substr($value, 1);

            return self::isQuoted($withoutNegation) ? $value : '-"' . $withoutNegation . '"';
        }

        return self::isQuoted($value) ? $value : '"' . $value . '"';
    }

    private static function isQuoted(string $string): bool
    {
        $size = strlen($string);

        if ($size <= 1) {
            return false;
        }

        $first = $string[0];
        $last  = $string[$size - 1];

        if ($first === '"' && $last === '"') {
            return true;
        }

        return false;
    }
}
