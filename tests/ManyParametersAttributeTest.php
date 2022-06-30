<?php

use RWC\TwitterStream\Operators\ParameterizedOperator;

it('can compile', function () {
    $attribute = new ParameterizedOperator(0, 'name', ['value1', 'value2']);

    expect($attribute->compile())->toBe('name:[value1 value2]');
});
//
//it('can be negated', function () {
//    $attribute = new ParameterizedAttribute('name', ['value1', 'value2']);
//
//    expect($attribute->markAsNegated()->compile())->toBe('-name:[value1 value2]');
//});
