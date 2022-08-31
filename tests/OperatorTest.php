<?php

use Felix\TwitterStream\Rule\Operators\KeyValueOperator;
use Felix\TwitterStream\Rule\Operators\Operator;
use Felix\TwitterStream\Support\Flags;

it('correctly joins many arguments', function (Flags $flags, string|array $value, string $expected) {
    $operator = new KeyValueOperator(
        $flags,
        'from',
        $value,
    );

    expect($operator->compile())->toBe($expected);
})->with([
    [new Flags(0), ['@first', '@second'], 'from:@first from:@second'],
    [new Flags(Operator::AND_FLAG), ['@first', '@second'], 'from:@first from:@second'],
    [new Flags(Operator::OR_FLAG), ['@first', '@second'], 'from:@first OR from:@second'],
    [new Flags(0), '@first', 'from:@first'],
    [new Flags(Operator::AND_FLAG), '@first', 'from:@first'],
    [new Flags(Operator::OR_FLAG), '@first', 'OR from:@first'],
]);
