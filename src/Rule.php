<?php

namespace stevecoug\TwitterStream;

class Rule
{
    public $value;
    public $tag;
    public $id;

    public function __construct(
        ?string $value,
        ?string $tag,
        ?string $id = null
    ) {
        $this->value = $value;
        $this->tag = $tag;
        $this->id = $id;
    }
}
