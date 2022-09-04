<?php

use Felix\TwitterStream\Support\Str;

it('can convert a string to snake case', function ($got, $expected) {
    expect(Str::snake($got))->toBe($expected);
})->with([
    ['fooBar', 'foo_bar'],
    ['Hello World !', 'hello_world!'],
]);

it('can convert from snake to camel case', function () {
    expect(Str::snakeToCamel('hello_world'))->toBe('helloWorld');
});