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

it('can build a rule with bounding boxes limitation', function () {
    $builder = Builder::create('#php')
        ->boundingBox([15, 20, 30, 40]);

    expect((string)$builder)->toBe('#php bounding_box:[15 20 30 40]');

    $builder = Builder::create('#php')
        ->boundingBox([
            [15, 20, 30, 40],
            [12, 30, 45, 52]
        ]);

    expect((string)$builder)->toBe('#php bounding_box:[15 20 30 40] bounding_box:[12 30 45 52]');

    $builder = Builder::create('#php')
        ->not->boundingBox([
            [15, 20, 30, 40],
            [12, 30, 45, 52]
        ]);

    expect((string)$builder)->toBe('#php -bounding_box:[15 20 30 40] -bounding_box:[12 30 45 52]');
});

it('can create a rule wih boolean operators', function () {
    $builder = Builder::create('')
        ->raw('apple')
        ->or()
        ->raw('iphone ipad');

    expect((string)$builder)->toBe('apple OR iphone ipad');
});

it('can createa a rule with grouping', function () {
    $builder = Builder::create('skiing')
        ->group(function (Builder $builder) {
            return $builder->raw('-snow')->or()->raw('day')->or()->raw('noschool');
        });

    expect((string)$builder)->toBe('skiing (-snow OR day OR noschool)');
});

it('can not negate the sample field', function () {
    Builder::create()->not->sample(15);
})->throws(LogicException::class);

it('can not not negate the nullcast field', function () {
    Builder::create()->nullcast();
})->throws(LogicException::class);

it('can not negate a group', function () {
    Builder::create()->not->group(function () {
    });
})->throws(LogicException::class);