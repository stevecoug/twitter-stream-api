<?php


namespace RWC\TwitterStream\Builder;


use ReflectionClass;
use ReflectionProperty;

class OppositeBuilder
{
    protected Builder $builder;

    protected array $is = [];
    protected array $has = [];
    protected array $lang = [];
    protected array $from = [];
    protected array $to = [];
    protected array $context = [];
    protected array $retweetsOf = [];
    protected array $url = [];
    protected array $entity = [];
    protected array $conversationId = [];
    protected array $bio = [];
    protected array $bioName = [];
    protected array $bioLocation = [];
    protected array $place = [];
    protected array $placeCountry = [];
    protected array $pointRadius = [];
    protected array $boundingBox = [];

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function from(string|array $users): Builder
    {
        $this->from = is_array($users) ? $users : [$users];
        return $this->builder->builder;
    }

    public function to(string|array $users): Builder
    {
        $this->to = is_array($users) ? $users : [$users];
        return $this->builder;
    }

    public function replies(): Builder
    {
        $this->is[] = 'reply';
        return $this->builder;
    }

    public function retweets(): Builder
    {
        $this->is[] = 'retweet';
        return $this->builder;
    }

    public function quote(): Builder
    {
        $this->is[] = 'quote';
        return $this->builder;
    }

    public function verified(): Builder
    {
        $this->is[] = 'verified';
        return $this->builder;
    }

    public function retweetsOf(string|array $users): Builder
    {
        $this->retweetsOf = is_array($users) ? $users : [$users];
        return $this->builder;
    }

    public function context(string|array $context): Builder
    {
        $this->context[] = is_array($context) ? $context : [$context];
        return $this->builder;
    }

    public function hashtags(): Builder
    {
        $this->has[] = 'hashtags';
        return $this->builder;
    }

    public function hasCashtags(): Builder
    {
        $this->has[] = 'cashtags';
        return $this->builder;
    }

    public function hasLinks(): Builder
    {
        $this->has[] = 'links';
        return $this->builder;
    }

    public function hasMentions(): Builder
    {
        $this->has[] = 'mentions';
        return $this->builder;
    }

    public function hasMedia(): Builder
    {
        $this->has[] = 'media';
        return $this->builder;
    }

    public function hasImages(): Builder
    {
        $this->has[] = 'images';
        return $this->builder;
    }

    public function hasVideos(): Builder
    {
        $this->has[] = 'videos';
        return $this->builder;
    }

    public function hasGeographicDataAttached(): Builder
    {
        $this->has[] = 'geo';
        return $this->builder;
    }

    public function locale(string $lang): Builder
    {
        $this->lang[] = $lang;
        return $this->builder;
    }

    public function url(string|array $urls): Builder
    {
        $this->url = is_array($urls) ? $urls : [$urls];
        return $this->builder;
    }

    public function entity(string|array $entities): Builder
    {
        $this->entity = is_array($entities) ? $entities : [$entities];
        return $this->builder;
    }

    public function conversation(string|array $conversations): Builder
    {
        $this->conversationId = is_array($conversations) ? $conversations : [$conversations];
        return $this->builder;
    }

    public function bio(string|array $bios): Builder
    {
        $this->bio = is_array($bios) ? $bios : [$bios];
        return $this->builder;
    }

    public function bioName(string|array $bioNames): Builder
    {
        $this->bioName = is_array($bioNames) ? $bioNames : [$bioNames];
        return $this->builder;
    }

    public function bioLocation(string|array $bioLocations): Builder
    {
        $this->bioLocation = is_array($bioLocations) ? $bioLocations : [$bioLocations];
        return $this->builder;
    }

    public function place(string|array $places): Builder
    {
        $this->place = is_array($places) ? $places : [$places];
        return $this->builder;
    }

    public function placeCountry(string|array $placesCountry): Builder
    {
        $this->placeCountry = is_array($placesCountry) ? $placesCountry : [$placesCountry];
        return $this->builder;
    }

    public function pointRadius(array $points): Builder
    {
        $isCollection = array_reduce($points, function ($_, $point) {
            return $_ || is_array($point);
        }, false);

        $this->pointRadius = $isCollection ? $points : [$points];
        return $this->builder;
    }

    public function boundingBox(array $boxes): Builder
    {

        $isCollection = array_reduce($boxes, function ($_, $box) {
            return $_ || is_array($box);
        }, false);

        $this->boundingBox = $isCollection ? $boxes : [$boxes];
        return $this->builder;
    }

    public function __toString(): string
    {
        $rule = [];
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            if ($property->getName() === 'builder') {
                continue;
            }
            $propertyName = strtolower(preg_replace_callback(
                "/(?'lowercase'[a-z])(?'uppercase'[A-Z])/",
                fn($matches) => $matches['lowercase'] . '_' . strtolower($matches['uppercase']),
                $property->getName()
            ));

            $property->setAccessible(true);
            $propertyValue = $property->getValue($this);

            if (empty($propertyValue)) {
                continue;
            }

            foreach ($propertyValue as $condition) {
                if (is_array($condition)) {
                    $condition = '[' . implode(' ', $condition) . ']';
                }
                $rule[] = '-' . $propertyName . ':' . $condition;
            }
        }

        if (empty($rule)) {
            return '';
        }

        return ' ' . implode(' ', $rule);
    }

}