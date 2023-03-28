<?php

namespace stevecoug\TwitterStream;

use BadMethodCallException;
use stevecoug\TwitterStream\Exceptions\TwitterException;
use stevecoug\TwitterStream\Operators\BoundingBoxOperator;
use stevecoug\TwitterStream\Operators\CountOperator;
use stevecoug\TwitterStream\Operators\GroupOperator;
use stevecoug\TwitterStream\Operators\KeyValueOperator;
use stevecoug\TwitterStream\Operators\NotNullCastOperator;
use stevecoug\TwitterStream\Operators\Operator;
use stevecoug\TwitterStream\Operators\PointRadiusOperator;
use stevecoug\TwitterStream\Operators\RawOperator;
use stevecoug\TwitterStream\Operators\SampleOperator;
use stevecoug\TwitterStream\Support\Flags;
use stevecoug\TwitterStream\Support\Str;
use Psr\Http\Message\ResponseInterface;
use SplStack;

/**
 * @property RuleBuilder $and
 * @property RuleBuilder $or
 *
 * @method self sample(int $percentage)
 * @method self pointRadius(string $longitude, string $latitude, string $radius)
 * @method self orPointRadius(string $longitude, string $latitude, string $radius)
 * @method self andPointRadius(string $longitude, string $latitude, string $radius)
 * @method self notPointRadius(string $longitude, string $latitude, string $radius)
 * @method self boundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 * @method self orBoundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 * @method self andBoundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 * @method self notBoundingBox(string $westLongitude, string $southLatitude, string $eastLongitude, string $northLatitude)
 * @method self orRaw(string|array $property)
 * @method self andRaw(string|array $property)
 * @method self andNotNullcast()
 * @method self orNotNullcast()
 * @method self group(callable $callable)
 * @method self orGroup(callable $callable)
 * @method self andGroup(callable $callable)
 */
class RuleBuilder extends _RuleBuilder
{
    public const KEY_VALUE_OPERATORS = [
        'from'                 => 'from',
        'to'                   => 'to',
        'url'                  => 'url',
        'retweets_of'          => 'retweets_of',
        'context'              => 'context',
        'entity'               => 'entity',
        'conversation_id'      => 'conversation_id',
        'bio'                  => 'bio',
        'bio_name'             => 'bio_name',
        'bio_location'         => 'bio_location',
        'place'                => 'place',
        'place_country'        => 'place_country',
        'lang'                 => 'lang',
        'url_title'            => 'url_title',
        'url_description'      => 'url_description',
        'url_contains'         => 'url_contains',
        'source'               => 'source',
        'in_reply_to_tweet_id' => 'in_reply_to_tweet_id',
        'retweets_of_tweet_id' => 'retweets_of_tweet_id',
    ];
    public const IS_OPERATORS = [
        'retweet'  => 'retweet',
        'reply'    => 'reply',
        'quote'    => 'quote',
        'verified' => 'verified',
    ];
    public const HAS_OPERATORS = [
        'hashtags' => 'hashtags',
        'cashtags' => 'cashtags',
        'links'    => 'links',
        'mentions' => 'mentions',
        'media'    => 'media',
        'images'   => 'images',
        'videos'   => 'videos',
        'geo'      => 'geo',
    ];
    public const COUNT_OPERATOR = [
        'followers' => 'followers',
        'tweets'    => 'tweets',
        'following' => 'following',
        'listed'    => 'listed',
    ];
    public const CUSTOM_OPERATORS = [
        'sample'       => SampleOperator::class,
        'null_cast'    => NotNullCastOperator::class,
        'bounding_box' => BoundingBoxOperator::class,
        'point_radius' => PointRadiusOperator::class,
        'group'        => GroupOperator::class,
    ];

    public $manager;
    public $tag;
    public SplStack $operators;

    /** @param SplStack<Operator> $operators */
    public function __construct(
        ?RuleManager $manager = null,
        ?string $tag = null,
        SplStack $operators = null
    ) {
        $this->manager = $manager;
        $this->tag = $tag;
        $this->operators = $operators ?? new SplStack();
    }

    public function __get(string $name): self
    {
        switch ($name) {
            // skip it.
            case 'and'; break;
            case 'or': $this->push(new RawOperator('OR')); break;
            default: trigger_error('Undefined property: ' . static::class . '::$' . $name, PHP_MAJOR_VERSION === 8 ? E_USER_WARNING : E_USER_ERROR);
        }

        return $this;
    }

    public function push(Operator $operator): self
    {
        $this->operators->push($operator);

        return $this;
    }

    public function __call(string $methodName, array $arguments): self
    {
        [$name, $flags] = $this->getNameAndFlags($methodName);

        if (array_key_exists($name, self::CUSTOM_OPERATORS)) {
            $tmp = self::CUSTOM_OPERATORS[$name];
            return $this->push(new $tmp($flags, ...$arguments));
        }

        if (array_key_exists($name, self::KEY_VALUE_OPERATORS)) return $this->push(new KeyValueOperator($flags, $name, ...$arguments));

        if ($flags->has(Operator::IS_FLAG) && array_key_exists($name, self::IS_OPERATORS)) return $this->push(new KeyValueOperator($flags, 'is', $name));

        if ($flags->has(Operator::IS_FLAG) && $name === '') return $this->push(new KeyValueOperator($flags, 'is', ...$arguments));

        if ($flags->has(Operator::HAS_FLAG) && array_key_exists($name, self::HAS_OPERATORS)) return $this->push(new KeyValueOperator($flags, 'has', $name));

        if ($flags->has(Operator::HAS_FLAG) && $name === '') return $this->push(new KeyValueOperator($flags, 'has', ...$arguments));

        if ($flags->has(Operator::COUNT_FLAG) && array_key_exists($name, self::COUNT_OPERATOR)) return $this->push(new CountOperator($flags, $name, ...$arguments));

        throw new BadMethodCallException(sprintf('Call to undefined method %s::%s()', static::class, $methodName));
    }

    private function getNameAndFlags(string $name): array
    {
        $name  = Str::snake($name);
        $flags = new Flags(0);

        foreach (Operator::OPERATORS as $operator => $flag) {
            if (str_starts_with($name, $operator)) {
                $flags->toggle($flag);
                $name = substr($name, strlen($operator . '_'));
            } elseif (str_ends_with($name, $operator)) {
                $flags->toggle($flag);
                $name = substr($name, 0, -strlen($operator . '_'));
            }
        }

        return [$name, $flags];
    }

    public function raw(string $raw): self
    {
        $this->operators->push(new RawOperator($raw));

        return $this;
    }

    public function __toString(): string
    {
        return $this->compile();
    }

    public function compile(): string
    {
        // loop over all operatorss and build the query
        $query = '';

        while (!$this->operators->isEmpty()) {
            $query = $this->operators->pop()->compile() . ' ' . $query;
        }

        return trim($query);
    }

    public function save(): ?ResponseInterface
    {
        if (!$this->manager) return null;
        return $this->manager->save($this->compile(), $this->tag);
    }

    public function validate(): array
    {
        return $this->manager->validate($this->compile());
    }

    public function build(): Rule
    {
        return new Rule($this->compile(), $this->tag);
    }
}
