<?php

namespace Felix\TwitterStream\Support;

/** @internal */
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

    public static function freeze(int $time, callable $callable): void
    {
        self::queue([$time], $callable);
    }

    public static function queue(array $times, callable $callable): void
    {
        Clock::$queue = [...Clock::$queue, ...$times];

        $callable();
    }
}
