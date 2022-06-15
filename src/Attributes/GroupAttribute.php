<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Attributes\Concerns\CanBeNegated;
use RWC\TwitterStream\Contracts\Attribute;
use RWC\TwitterStream\Contracts\NegatableAttribute;

class GroupAttribute implements Attribute, NegatableAttribute
{
    use CanBeNegated;

    public function __construct(public array $attributes)
    {
    }

    public function compile(): string
    {
        $children = array_map(function (Attribute $attribute) {
            if (!$this->negated || !$attribute instanceof NegatableAttribute) {
                return $attribute->compile();
            }

            return $attribute->markAsNegated()->compile();
        }, $this->attributes);

        return sprintf('(%s)', implode(' ', $children));
    }
}
