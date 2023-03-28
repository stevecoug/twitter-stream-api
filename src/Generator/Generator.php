<?php

namespace stevecoug\TwitterStream\Generator;

use stevecoug\TwitterStream\RuleBuilder;

/**
 * @codeCoverageIgnore (internal tool)
 *
 * @internal
 */
class Generator
{
    public static function tests(): array
    {
        $tests = [];

        foreach (self::cases() as $case) {
            $tests = [...$tests, ...$case->tests()];
        }

        return $tests;
    }

    public static function cases(): \Generator
    {
        foreach (RuleBuilder::IS_OPERATORS as $name) {
            yield new StandaloneOperator('is', $name);
        }

        foreach (RuleBuilder::HAS_OPERATORS as $name) {
            yield new StandaloneOperator('has', $name);
        }

        foreach (RuleBuilder::KEY_VALUE_OPERATORS as $name) {
            yield new ParameterizedOperator($name);
        }

        foreach (RuleBuilder::COUNT_OPERATOR as $name) {
            yield new CountOperator($name);
        }
    }
}
