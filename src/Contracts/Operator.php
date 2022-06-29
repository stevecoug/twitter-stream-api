<?php

namespace RWC\TwitterStream\Contracts;

interface Attribute
{
    // import constants from Attribute
    public function compile(): string;

    public function flags(): int;

}
