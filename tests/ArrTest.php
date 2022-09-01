<?php

use Felix\TwitterStream\Support\Arr;

it('can flatten an array', function ($input, $output) {
    expect(Arr::flatten($input))->toBe($output);
})->with([
    ['a', ['a']],
    [['a', [[['b']]]], ['a', 'b']],
    [[], []]
]);