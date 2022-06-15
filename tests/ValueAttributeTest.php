<?php

use RWC\TwitterStream\Attributes\ValueAttribute;

it('can compile', function (string $name, array $values, string $expected) {
    $attribute = new ValueAttribute($name, $values);

    expect($attribute->compile())->toBe($expected);
})->with([
    [
        'name'     => 'from',
        'values'   => [1, 2, 4],
        'expected' => 'from:1 OR from:2 OR from:4',
    ],
    [
        'name'     => 'from',
        'values'   => [[1]],
        'expected' => 'from:1',
    ],
    [
        'name'     => 'to',
        'values'   => [42],
        'expected' => 'to:42',
    ],
]);

it('can negate the attribute', function (string $name, array $values, string $expected) {
    $attribute = new ValueAttribute($name, $values);

    $attribute->markAsNegated();

    expect($attribute->compile())->toBe($expected);
})->with([
    [
        'name'     => 'from',
        'values'   => [1, 2, 4],
        'expected' => '-from:1 OR -from:2 OR -from:4',
    ],
    [
        'name'     => 'from',
        'values'   => [[1]],
        'expected' => '-from:1',
    ],
    [
        'name'     => 'to',
        'values'   => [42],
        'expected' => '-to:42',
    ],
]);
