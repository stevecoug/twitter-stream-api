<?php


namespace RWC\TwitterStream\Builder\Concerns;


use ReflectionClass;
use ReflectionProperty;

trait CompilesRule
{
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

    public function __toString(): string
    {
        $rule = [];
        $reflection = new ReflectionClass($this);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            if ($property->isStatic() || in_array($property->getName(), static::$excludedProperties)) {
                continue;
            }

            $propertyName = strtolower(preg_replace_callback(
                "/(?'lowercase'[a-z])(?'uppercase'[A-Z])/",
                fn($matches) => $matches['lowercase'] . '_' . strtolower($matches['uppercase']),
                $property->getName()
            ));

            if (!property_exists($this, 'not')) {
                $propertyName = '-' . $propertyName;
            }

            $property->setAccessible(true);
            $propertyValue = $property->getValue($this);

            if (empty($propertyValue)) {
                continue;
            }

            if (is_array($propertyValue)) {
                foreach ($propertyValue as $condition) {
                    if (is_array($condition)) {
                        $condition = '[' . implode(' ', $condition) . ']';
                    }
                    $rule[] = $propertyName . ':' . $condition;
                }
            } else {
                $rule[] = $propertyName . ':' . $propertyValue;
            }
        }

        if (property_exists($this, 'not')) {
            return trim(implode(' ', [$this->query, ...$rule, (string) $this->not]));
        }

        return trim(implode(' ', $rule));
    }
}