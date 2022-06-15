<?php

use RWC\TwitterStream\Attributes\ManyParametersAttribute;

it('can compile', function () {
    $attribute = new ManyParametersAttribute('name', ['value1', 'value2']);

    expect($attribute->compile())->toBe('name:[value1 value2]');
});

it('can be negated', function () {
    $attribute = new ManyParametersAttribute('name', ['value1', 'value2']);

    expect($attribute->markAsNegated()->compile())->toBe('-name:[value1 value2]');
});
