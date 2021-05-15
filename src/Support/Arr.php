<?php

namespace RWC\TwitterStream\Support;

class Arr
{
    public static function wrap($array): array
    {
        if (is_array($array)) {
            return $array;
        }

        return [$array];
    }
}
