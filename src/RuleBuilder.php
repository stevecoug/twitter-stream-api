<?php

namespace RWC\TwitterStream;

use RWC\TwitterStream\Attributes\ManyParametersAttribute;
use RWC\TwitterStream\Attributes\QuotedRawAttribute;
use RWC\TwitterStream\Attributes\RawAttribute;
use RWC\TwitterStream\Attributes\ValueAttribute;
use RWC\TwitterStream\Contracts\Attribute;
use SplStack;

/**
 * @property RuleBuilder $and
 * @property RuleBuilder $or
 * @property RuleBuilder $not
 *
 * @method self from(string|array $value)
 * @method self to(string|array $value)
 * @method self url(string|array $value)
 * @method self retweetsOf(string|array $value)
 * @method self context(string|array $value)
 * @method self entity(string|array $value)
 * @method self conversationId(string|array $value)
 * @method self bio(string|array $value)
 * @method self bioName(string|array $value)
 * @method self bioLocation(string|array $value)
 * @method self place(string|array $value)
 * @method self placeCountry(string|array $value)
 * @method self pointRadius(string $longitude, string $latitude, string $radius)
 * @method self boundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 *
 * @method self hasHashtags()
 * @method self hasCashtags()
 * @method self hasLinks()
 * @method self hasMentions()
 * @method self hasMedia()
 * @method self hasVideos()
 * @method self hasGeo()
 * @method self hasNotHashtags()
 * @method self hasNotCashtags()
 * @method self hasNotLinks()
 * @method self hasNotMentions()
 * @method self hasNotMedia()
 * @method self hasNotVideos()
 * @method self hasNotGeo()
 *
 * @method self isRetweet()
 * @method self isReply()
 * @method self isQuote()
 * @method self isVerified()
 * @method self isNotRetweet()
 * @method self isNotReply()
 * @method self isNotQuote()
 * @method self isNotVerified()
 * @method self notNullCast()
 *
 * @method self has(string|array $properties)
 * @method self raw(string|array $raws)
 * @method self quoted(string|array $quotes)
 * @method self sample(int $percent)
 * @method self lang(string $lang)
 */
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

    public function push(Attribute|callable $attribute): self
    {
        if (is_callable($attribute)) {
            $attribute = $attribute();
        }

        if ($this->negateNextAttribute) {
            $attribute->markAsNegated();

            $this->negateNextAttribute = false;
        }

        $this->attributes->push($attribute);

        return $this;
    }

    /** @return self|void */
    public function __get(string $name)
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
        trigger_error('Undefined property: ' . static::class . '::$' . $name, PHP_MAJOR_VERSION === 8 ? E_USER_WARNING : E_USER_ERROR);
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
        return $this->push(match ($name) {
            'notNullCast' => new RawAttribute('-is:nullcast'),
            'pointRadius' => new ManyParametersAttribute('point_radius', $arguments),
            'boundingBox' => new ManyParametersAttribute('bounding_box', $arguments),
            'has', 'is' => new ValueAttribute($name, $arguments, parameterized: false),
            'raw'    => new RawAttribute($arguments[0] ?? ''),
            'quoted' => new QuotedRawAttribute($arguments[0] ?? ''),
            default  => function () use ($name, $arguments) {
                foreach (['has', 'is'] as $operator) {
                    if (!str_starts_with($name, $operator)) {
                        continue;
                    }

                    $negated = false;

                    if (str_starts_with($name, $operator . 'Not')) {
                        $negated = true;
                    }

                    $attribute = new ValueAttribute(
                        $operator,
                        [
                            // poor man's camel to pascal case convertor
                            strtolower(preg_replace(
                                '/(?<!^)[A-Z]/',
                                '_$0',
                                substr($name, strlen($operator) + ($negated ? 3 : 0))
                            )),
                        ]
                    );

                    return $negated ? $attribute->markAsNegated() : $attribute;
                }

                return new ValueAttribute($name, $arguments, parameterized: true);
            },
        });
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
