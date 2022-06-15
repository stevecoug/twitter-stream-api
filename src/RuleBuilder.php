<?php

namespace RWC\TwitterStream;

use RWC\TwitterStream\Attributes\ManyParametersAttribute;
use RWC\TwitterStream\Attributes\RawAttribute;
use RWC\TwitterStream\Attributes\ValueAttribute;
use RWC\TwitterStream\Contracts\Attribute;
use SplStack;

class RuleBuilder
{
    /** @var SplStack<Attribute> */
    protected SplStack $attributes;
    private bool $negateNextAttribute = false;

    public function __construct(string $query = '')
    {
        $this->attributes = new SplStack();
        $this->push(
            new RawAttribute($query)
        );
    }

    public function push(Attribute $attribute): self
    {
        if ($this->negateNextAttribute) {
            $attribute->markAsNegated();

            $this->negateNextAttribute = false;
        }

        $this->attributes->push($attribute);

        return $this;
    }

    public static function create(string $query = ''): static
    {
        return new static($query);
    }

    public function __get(string $name): self
    {
        if ($name === 'not') {
            $this->negateNextAttribute = true;

            return $this;
        }

        if ($name === 'and') {
            $this->push(new RawAttribute('and'));

            return $this;
        }

        if ($name === 'or') {
            $this->push(new RawAttribute('or'));

            return $this;
        }

        /* @see https://wiki.php.net/rfc/undefined_property_error_promotion */
        trigger_error('Undefined Property: ' . static::class . '::' . $name, PHP_MAJOR_VERSION === 8 ? E_USER_WARNING : E_USER_ERROR);

        return $this;
    }

    public function orGroup(callable $builder): static
    {
        return $this->or->group($builder);
    }

    public function group(callable $builder): static
    {
        $stub = new self();
        $builder($stub);
        $this->push(new RawAttribute('(' . $stub . ')'));

        return $this;
    }

    public function andGroup(callable $builder): static
    {
        return $this->and->group($builder);
    }

    public function __call(string $name, array $arguments): static
    {
        $this->push(match ($name) {
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
