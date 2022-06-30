<?php

use RWC\TwitterStream\Operators\GroupOperator;
use RWC\TwitterStream\Operators\Operator;
use RWC\TwitterStream\RuleBuilder;

it('can compile', function () {
    $op = new GroupOperator(
        0,
        fn (RuleBuilder $builder) => $builder->from('me')->orFrom('you'),
    );

    expect($op->compile())->toBe('(from:me or from:you)');
});
it('negates each operator', function () {
    $op = new GroupOperator(
        Operator::NOT_OPERATOR,
        fn (RuleBuilder $builder) => $builder->from('me')->orFrom('you'),
    );

    expect($op->compile())->toBe('(-from:me or -from:you)');
});
