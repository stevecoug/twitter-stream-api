<?php

namespace RWC\TwitterStream;

use RWC\TwitterStream\Attributes\ManyParametersAttribute;
use RWC\TwitterStream\Attributes\RawAttribute;
use RWC\TwitterStream\Attributes\ValueAttribute;
use RWC\TwitterStream\Contracts\Attribute;
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
    /** @var SplStack<Attribute> */
    protected SplStack $attributes;

    public function __construct(string $query = '')
    {
        $this->attributes = new SplStack();
        $this->attributes->push(
            new RawAttribute($query)
        );
    }

    public static function create(string $query = ''): static
    {
        return new static($query);
    }

    public function group(callable $builder): static
    {
        $stub = new self();
        $builder($stub);
        $this->attributes->push(new RawAttribute('(' . $stub . ')'));

        return $this;
    }

    public function or(callable $builder = null)
    {
        if (is_null($builder)) {
            return $this->__call('or', []);
        }

        $stub = new self();
        $builder($stub);
        $this->attributes->push(new RawAttribute('or (' . trim($stub) . ')'));

        return $this;
    }

    public function __call(string $name, array $arguments)
    {
        $this->attributes->push(match ($name) {
            'query' => new RawAttribute($arguments[0]),
            'and', 'or' => new RawAttribute($name),
            'pointRadius' => new ManyParametersAttribute('point_radius', $arguments),
            'boundingBox' => new ManyParametersAttribute('bounding_box', $arguments),
            default       => new ValueAttribute($name, $arguments)
        });

        return $this;
    }

    public function __toString(): string
    {
        return $this->compile();
    }

    public function compile(): string
    {
        // loop over all attributes and build the query
        $query = '';

        while (!$this->attributes->isEmpty()) {
            $attribute = $this->attributes->pop();
            $query     = $attribute->compile() . ' ' . $query;
        }

        return trim($query);
    }
}
