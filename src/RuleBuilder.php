<?php

namespace RWC\TwitterStream;

use LogicException;
use SplStack;

/**
 * @property RuleBuilder  $not
 * @property array|string $from
 * @property array|string $to
 * @property string       $is
 * @property string       $has
 * @property int          $sample
 * @property array|string $retweets_of
 * @property array|string $context
 * @property array|string $lang
 * @property array|string $url
 * @property array|string $entity
 * @property array|string $conversation_id
 * @property array|string $bio
 * @property array|string $bio_name
 * @property array|string $bio_location
 * @property array|string $place
 * @property array|string $place_country
 * @property array        $point_radius
 * @property array        $bounding_box
 * @property string       $raw
 * @property bool         $or
 * @property bool         $and
 * @property RuleBuilder  $group
 */
class RuleBuilder
{
    protected bool $negates = false;
//    protected array $attributes = [];
    /** @var SplStack<Attribute> */
    protected SplStack $attributes;

    public function __construct(string $query = '')
    {
        $this->attributes = new SplStack();
        $this->attributes->push(
            new Attribute('query', $query, headless: true)
        );
    }

    public static function create(string $query = ''): static
    {
        return new static($query);
    }

    public function __get(string $name): ?RuleBuilder
    {
        if ($name !== 'not') {
            trigger_error('Undefined property QueryBuilder::' . $name, E_USER_WARNING);

            return null;
        }

        return $this->negates();
    }

    protected function negates(bool $negates = true): static
    {
        $this->negates = $negates;

        return $this;
    }

    public function __call(string $name, array $arguments)
    {
        if ($name === 'has') {
            $this->attributes->push(
                new Attribute(
                    'has',
                    $arguments,
                    $this->negates
                )
            );

            return $this;
        }
        dd($name, $arguments);
        if (empty($value)) {
            $this->negates(false);

            return $this;
        }

        // todo: make sure there's at least 1 element
        $value = $arguments[0];

        $isHeadless = in_array($name, ['and', 'or', 'query', 'raw']);

        $this->attributes->push(
            new Attribute(strtolower($name), $value, $this->negates, $isHeadless)
        );

        return $this;
    }

    public function group(callable $builder): static
    {
        if ($this->negates) {
            // todo: throw custom exception
            throw new LogicException('A group can not be negated. Negate each individual statement.');
        }

        $stub = new self();
        // Returning the builder is optional.
        $builder($stub);
        $this->subRule($stub);

        return $this;
    }

    public function compile(): string
    {
        $rule = [];

        foreach ($this->attributes as $attribute) {
            $rule[] = $attribute->compile();
        }

        return implode(' ', array_reverse($rule));
    }
}
