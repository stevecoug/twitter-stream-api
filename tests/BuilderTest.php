<?php

use RWC\TwitterStream\Builder\Builder;

it('works', function () {
    $builder = Builder::create('#php')
        ->retweets()
        ->from('@afelixdorn');

    expect((string)$builder)->toBe('#php is:retweet from:@afelixdorn');
})->only();