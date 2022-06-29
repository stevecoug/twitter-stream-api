<?php

use RWC\TwitterStream\Operators\GroupAttribute;
use RWC\TwitterStream\Operators\RawOperator;
use RWC\TwitterStream\Operators\ValueAttribute;
//
//it('can compile', function () {
//    $attribute = new GroupAttribute([
//        new ValueAttribute('from', ['me']),
//        new RawAttribute('or'),
//        new ValueAttribute('from', ['you']),
//    ]);
//
//    expect($attribute->compile())->toBe('(from:me or from:you)');
//});
//it('negates each attribute', function () {
//    $attribute = new GroupAttribute([
//        new ValueAttribute('from', ['me']),
//        new RawAttribute('or'),
//        new ValueAttribute('from', ['you']),
//    ]);
//
//    $attribute->markAsNegated();
//
//    expect($attribute->compile())->toBe('(-from:me or -from:you)');
//});
