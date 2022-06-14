<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute;

class GroupAttribute implements Attribute
{
    public function __construct(public array $attributes)
    {
    }

    public function compile(): string
    {
        return sprintf(
            '(%s)',
            implode(
                ' ',
                array_map(fn (Attribute $attribute) => $attribute->compile(), $this->attributes)
            )
        );
    }

    public function compileNegated(): string
    {
        return sprintf(
            '(%s)',
            implode(
                ' ',
                array_map(fn (Attribute $attribute) => $attribute->compileNegated(), $this->attributes)
            )
        );
    }
}
