<?php

namespace Felix\TwitterStream\Support;

class Clock
{
    protected static array $queue = [];

    public static function now(): int
    {
        if (count(self::$queue) !== 0) {
            return array_shift(self::$queue);
        }

        return hrtime()[0];
    }

    /** @internal */
    public static function freeze(int $time, callable $callable)
    {
        self::queue([$time], $callable);
    }

    /** @internal */
    public static function queue(array $times, callable $callable)
    {
        Clock::$queue = [...Clock::$queue, ...$times];

        $callable();
    }
}
