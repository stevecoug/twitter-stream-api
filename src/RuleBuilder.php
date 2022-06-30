<?php

namespace RWC\TwitterStream;

use RWC\TwitterStream\Operators\GroupOperator;
use RWC\TwitterStream\Operators\NamedOperator;
use RWC\TwitterStream\Operators\Operator;
use RWC\TwitterStream\Operators\Operator as OperatorContract;
use RWC\TwitterStream\Operators\ParameterizedOperator;
use RWC\TwitterStream\Operators\RawOperator;
use RWC\TwitterStream\Support\Flag;
use RWC\TwitterStream\Support\Str;
use SplStack;

/**
 * @property RuleBuilder $and
 * @property RuleBuilder $or
 *
 * @method self sample(int $percent)
 * @method self pointRadius(string $longitude, string $latitude, string $radius)
 * @method self boundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 * @method self notNullCast()
 * @method self has(string|array $properties)
 * @method self raw(string|array $property)
 * @method self query(string|array $query)
 */
class RuleBuilder extends _RuleBuilder
{
    protected const OPERATORS_FLAGS = [
        'or'  => OperatorContract::OR_OPERATOR,
        'and' => OperatorContract::AND_OPERATOR,
        'is'  => OperatorContract::IS_OPERATOR,
        'has' => OperatorContract::HAS_OPERATOR,
        'not' => OperatorContract::NOT_OPERATOR,
    ];

    public function __construct(
        /** @var SplStack<OperatorContract> $attributes */
        public SplStack $operators = new SplStack()
    ) {
    }

    public function __get(string $name): self
    {
        match ($name) {
            'and' => $this->push(new RawOperator(['and'])),
            'or'  => $this->push(new RawOperator(['or'])),
            /* @see https://wiki.php.net/rfc/undefined_property_error_promotion */
            default => trigger_error('Undefined property: ' . static::class . '::$' . $name, PHP_MAJOR_VERSION === 8 ? E_USER_WARNING : E_USER_ERROR)
        };

        return $this;
    }

    public function push(OperatorContract $attribute): self
    {
        $this->operators->push($attribute);

        return $this;
    }

    public function __call(string $name, array $arguments): static
    {
        $kind      = 0;
        $arguments = self::flattenArgumentsAndQuoteStrings($arguments);

        foreach (self::OPERATORS_FLAGS as $flag => $id) {
            // if the name is the flag, skip, that's to handle calls like is([...]) and has([...])
            // if the flag (or, and, not....) is not found, skip
            if ($name === $flag || !str_starts_with(strtolower($name), $flag)) {
                continue;
            }

            $kind |= $id;
            $name = substr($name, strlen($flag));
        }

        if ($name === 'group') {
            return $this->group($arguments[0] ?? null, $kind);
        }

        $name = Str::snake($name);

        if (Flag::hasAny($kind, [Operator::IS_OPERATOR, Operator::HAS_OPERATOR])) {
            // Methods like is, hasNot will be empty with the flags IS_ATTRIBUTE, NOT_ATTRIBUTE... set.
            // If that's the case, then it means the caller looks like x([...]) or y('...')
            // so we just pass in the normalized arguments.
            $arguments = $name === '' ? $arguments : [lcfirst($name)];

            return $this->push(new NamedOperator(
                $kind,
                Flag::has($kind, Operator::IS_OPERATOR) ? 'is' : 'has',
                $arguments,
            ));
        }

        return $this->push(match ($name) {
            // notNullCast will be transformed to null_cast with a NOT_ATTRIBUTE flag
            // This technically means that calling $this->NullCast() would work the same as $this->notNullCast().
            'null_cast'    => new RawOperator(['-is:nullcast']),
            'sample'       => new RawOperator(['sample:' . $arguments[0]]),
            'point_radius' => new ParameterizedOperator($kind, 'point_radius', $arguments),
            'bounding_box' => new ParameterizedOperator($kind, 'bounding_box', $arguments),
            'raw', 'query' => new RawOperator($arguments),
            // As the method is in camelCase, we need to lowercase the first letter after the 'is' or 'has'
            default => new NamedOperator($kind, lcfirst($name), $arguments)
        });
    }

    /**
     * A very descriptive name! This method recursively flattens an array.
     * If a string with spaces is found within the array, it quotes it.
     * Given a string, it simply wraps it in an array and quotes it (if needed).
     */
    private static function flattenArgumentsAndQuoteStrings(array|string $array): array
    {
        if (!is_array($array)) {
            return [Str::quote($array)];
        }

        $result = [];

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge($result, self::flattenArgumentsAndQuoteStrings($value));
            } else {
                $result[$key] = Str::quote($value);
            }
        }

        return $result;
    }

    public function group(callable $builder, int $flags = 0)
    {
        return $this->push(new GroupOperator($flags, $builder));
    }

    public function __toString(): string
    {
        return $this->compile();
    }

    public function compile(): string
    {
        // loop over all attributes and build the query
        $query = '';

        while (!$this->operators->isEmpty()) {
            $compiled = $this->operators->pop()->compile();
            if (!str_starts_with($compiled, ' ')) {
                $compiled = ' ' . $compiled;
            }

            $query = $compiled . $query;
        }

        return trim($query);
    }
}
