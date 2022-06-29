<?php

namespace RWC\TwitterStream\Attributes;

use RWC\TwitterStream\Contracts\Attribute as BaseAttribute;

class Attribute implements BaseAttribute
{
    public const OR_ATTRIBUTE  = 1 << 0;
    public const AND_ATTRIBUTE = 1 << 1;
    public const NOT_ATTRIBUTE = 1 << 2;
    public const IS_ATTRIBUTE  = 1 << 3;
    public const HAS_ATTRIBUTE = 1 << 4;

    public const JOIN_SPACE = ' ';
    public const JOIN_AND   = ' and ';
    public const JOIN_OR    = ' or ';

    public function __construct(
        public int $kind,
        public string $name,
        public array $values,
    ) {
    }

    public function flags(): int
    {
        return $this->kind;
    }

    public function compile(): string
    {
        $buffer = '';

        $join = match (true) {
            ($this->kind & self::OR_ATTRIBUTE) === self::OR_ATTRIBUTE   => self::JOIN_OR,
            ($this->kind & self::AND_ATTRIBUTE) === self::AND_ATTRIBUTE => self::JOIN_AND,
            default                                                     => self::JOIN_SPACE,
        };
        $negation = (($this->kind & self::NOT_ATTRIBUTE) === self::NOT_ATTRIBUTE) ? '-' : '';

        foreach ($this->values as $value) {
            if (str_contains($value, ' ')) {
                $value = sprintf('"%s"', $value);
            }

            $buffer .= sprintf('%s%s%s:%s', $join, $negation, $this->name, $value);
        }

        // remove the leading join character and return
        return substr($buffer, strlen($join));
    }
}
