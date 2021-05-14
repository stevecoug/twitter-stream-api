<?php

use RWC\TwitterStream\Builder\Builder;

it('can build a rule', function () {
    $builder = Builder::create('#php')
        ->retweets()
        ->from('@afelixdorn');

    expect((string)$builder)->toBe('#php is:retweet from:@afelixdorn');
});

it('can build a rule with negated conditions', function () {
    $builder = Builder::create('#php')
        ->not->retweets();

    expect((string)$builder)->toBe('#php -is:retweet');
});