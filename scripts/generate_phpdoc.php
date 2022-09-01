<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use Felix\TwitterStream\Generator\CountOperator;
use Felix\TwitterStream\Generator\Generator;
use Felix\TwitterStream\Generator\ParameterizedOperator;
use Felix\TwitterStream\Generator\StandaloneOperator;

$cases = Generator::cases();

$boilerplate = <<<EOF
<?php

namespace Felix\TwitterStream;

/**
%s
*/
class _RuleBuilder {

}
EOF;

$doc = '';

foreach ($cases as $case) {
    foreach ($case->methods() as $method) {
        $doc .= match ($case::class) {
            ParameterizedOperator::class => sprintf('* @method RuleBuilder %s(string|array $value)', $method),
            CountOperator::class         => sprintf('* @method RuleBuilder %s(int $min, ?int $max = null)', $method),
            StandaloneOperator::class    => sprintf('* @method RuleBuilder %s()', $method)
        } . PHP_EOL;
    }
}

$doc = rtrim($doc, PHP_EOL);

echo sprintf($boilerplate, $doc);
