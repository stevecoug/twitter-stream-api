<?php

use RWC\TwitterStream\FilteredStream;

it('works', function (int $backfill, array $fields, array $expansions, string $expected) {
    $stream = new FilteredStream();

    $url = $stream
        ->backfill($backfill)
        ->fields(...$fields)
        ->expansions(...$expansions)
        ->toURL();

    dump(func_get_args());
    expect($url)->toBe('https://api.twitter.com/2/tweets/search/stream?' . str_replace(',', '%2C', $expected));
})->with([
    [
        'backfill_minutes' => 0,
        'fields' => [],
        'expansions' => [],
        'url' => '',
    ],
    [
        'backfill_minutes' => 4,
        'fields' => [],
        'expansions' => [],
        'url' => 'backfill_minutes=4',
    ],
    [
        'backfill_minutes' => 0,
        'fields' => ['media.url'],
        'expansions' => [],
        'url' => 'media.fields=url',
    ],
    [
        'backfill_minutes' => 0,
        'fields' => ['media.url', 'media.name'],
        'expansions' => [],
        'url' => 'media.fields=url,name',
    ],
    [
        'backfill_minutes' => 0,
        'fields' => [],
        'expansions' => ['media.url'],
        'url' => 'expansions=media.url',
    ],
    [
        'backfill_minutes' => 0,
        'fields' => [],
        'expansions' => ['media.url', 'user.name'],
        'url' => 'expansions=media.url,user.name',
    ],
]);