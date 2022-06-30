<?php

use RWC\TwitterStream\Operators\DefaultOperator;

//it('works', function (){
//    $b = (new \RWC\TwitterStream\RuleBuilder('#laravel'))->notFrom(['@spatie_be', '@spatie_fr']);
//
//    dd((string) $b);
//})->only();
//
//it('compiles using the right join', function (string $join, string $expected) {
//    $attribute = new Attribute(
//        'from',
//        ['@first', '@second'],
//        $join,
//    );
//
//    expect($attribute->compile())->toBe($expected);
//})->with([
//    [Attribute::JOIN_SPACE, 'from:@first from:@second'],
//    [Attribute::JOIN_AND, 'from:@first and from:@second'],
//    [Attribute::JOIN_OR, 'from:@first or from:@second'],
//]);

//it('can compile a grouped attribute', function () {
//    $attribute = new Attribute(
//        'from',
//        ['@first', '@second'],
//        grouped: true,
//    );
//
//    expect($attribute->compile())->toBe('(from:@first from:@second)');
//});
//
//it('can quote values', function () {
//    $attribute = new Attribute(
//        'bio',
//        ['some thing', 'this', 'that too'],
//    );
//
//    expect($attribute->compile())->toBe('bio:"some thing" bio:this bio:"that too"');
//});
