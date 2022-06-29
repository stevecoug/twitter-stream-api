<?php

require __DIR__ . '/vendor/autoload.php';

use RWC\TwitterStream\Generator\Generator;


echo sprintf(<<<EOF
<?php

use RWC\TwitterStream\RuleBuilder;

/** Do not edit manually; changes will be lost. */
it('compiles', function (\$value, \$arguments, \$expected) {
    expect((new RuleBuilder())->{\$value}(...\$arguments)->compile())->toBe(\$expected);
})->with(%s);
EOF, var_export(Generator::tests(), true)) . PHP_EOL;
