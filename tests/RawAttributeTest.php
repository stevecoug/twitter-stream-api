<?php

use RWC\TwitterStream\Operators\RawOperator;

it('can compile', function () {
    $attribute = new RawOperator(['someThing']);

    expect($attribute->compile())->toBe('someThing');
});
