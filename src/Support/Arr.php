<?php

namespace RWC\TwitterStream\Support;

/** @internal */
class Arr
{
    public static function flatten(mixed $array): array
    {
        if (!is_array($array)) {
            return [$array];
        }

        $result = [];

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, self::flatten($value));
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
