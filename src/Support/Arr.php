<?php

namespace Felix\TwitterStream\Support;

/** @internal */
class Arr
{
    public static function flatten($value)
    {
        if (!is_array($value)) {
            $value = [$value];
        }

        $result = [];

        foreach ($value as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, self::flatten($value));
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
}
