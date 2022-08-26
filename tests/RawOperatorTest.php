<?php

use Felix\TwitterStream\Rule\Operators\Operator;
use Felix\TwitterStream\Rule\Operators\RawOperator;

it('can compile', function () {
    $operator = new RawOperator(0, ['someThing']);

    expect($operator->compile())->toBe('someThing');
});

it('can compile with flags', function () {
   $operator = new RawOperator(Operator::OR_OPERATOR, ['someThing']);

   expect($operator->compile())->toBe('OR someThing');

    $operator = new RawOperator(Operator::AND_OPERATOR, ['someThing']);

    expect($operator->compile())->toBe('AND someThing');
});