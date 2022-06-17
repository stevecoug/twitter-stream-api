<?php

use RWC\TwitterStream\RuleBuilder;

it('can compile a query', function () {
    expect(RuleBuilder::create('php')->compile())->toBe('php');
});

it('can compile a query with an attribute', function () {
    expect(RuleBuilder::create('php')->lang('en')->compile())->toBe('php lang:en');
});

it('can compile a query with many attributes', function () {
    expect(RuleBuilder::create('php')->lang('en')->has('images')->compile())->toBe('php lang:en has:images');
});

it('can compile a query with a negated attribute', function () {
    expect(RuleBuilder::create('php')->not->has('images')->compile())->toBe('php -has:images');
});

it('can compile a query with many negated attributes', function () {
    expect(RuleBuilder::create('php')->not->has('images')->not->has('videos')->compile())->toBe('php -has:images -has:videos');
});

it('can compile a query with mixed negated and non-negated attributes', function () {
    expect(RuleBuilder::create('php')->not->has('images')->lang('en')->not->has('videos')->compile())->toBe('php -has:images lang:en -has:videos');
});

it('can compile a query with attributes linked by OR', function () {
    expect(RuleBuilder::create('php')->lang('en')->or->has('images')->compile())->toBe('php lang:en or has:images');
});

it('can compile a query with attributes linked by AND', function () {
    expect(RuleBuilder::create('php')->lang('en')->and->has('images')->compile())->toBe('php lang:en and has:images');
});

it('can compile a query with attributes linked by OR and AND', function () {
    expect(RuleBuilder::create('php')->lang('en')->or->has('images')->and->has('videos')->compile())->toBe('php lang:en or has:images and has:videos');
});

it('can compile a query with a group', function () {
    expect(RuleBuilder::create('php')->group(function (RuleBuilder $b) {
        $b->lang('en')->and->has('images');
    })->compile())->toBe('php (lang:en and has:images)');
});

it('can compile a query with an or group', function () {
    expect(RuleBuilder::create('cats')->has('images')->orGroup(function (RuleBuilder $b) {
        return $b->lang('en')->and->has('videos');
    })->compile())->toBe('cats has:images or (lang:en and has:videos)');
});

it('can compile a query with an and group', function () {
    expect(RuleBuilder::create('cats')->has('images')->andGroup(function (RuleBuilder $b) {
        return $b->lang('en')->or->has('videos');
    })->compile())->toBe('cats has:images and (lang:en or has:videos)');
});

it('can compile a point radius attribute', function () {
    expect(RuleBuilder::create('dogs')->pointRadius('42', '-42', '4.2')->compile())
        ->toBe('dogs point_radius:[42 -42 4.2]');
});

it('can compile a bounding box attribute', function () {
    expect(RuleBuilder::create('dogs')->boundingBox('1', '2', '3', '4')->compile())
        ->toBe('dogs bounding_box:[1 2 3 4]');
});

it('can compile a has attribute passed as a string', function () {
    expect(RuleBuilder::create('dogs')->has('images')->compile())
        ->toBe('dogs has:images');
});

it('can compile many has attributes passed as strings', function () {
    expect(RuleBuilder::create('dogs')->has('images')->has('videos')->compile())
        ->toBe('dogs has:images has:videos');
});

it('can compile a has attribute passed as an array', function () {
    expect(RuleBuilder::create('dogs')->has(['images', 'videos'])->compile())
        ->toBe('dogs has:images has:videos');
});

it('can compile many has attributes passed as arrays', function () {
    expect(RuleBuilder::create('dogs')->has(['images', 'videos'])->has(['geo', 'links'])->compile())
        ->toBe('dogs has:images has:videos has:geo has:links');
});

it('fails if you access an undefined property', function () {
    RuleBuilder::create('php')->foo;
})->throws(ErrorException::class, 'Undefined property: RWC\TwitterStream\RuleBuilder::$foo');




//

// it('can build a rule', function () {
//    $builder = RuleBuilder::create('#php')
//        ->retweets()
//        ->from('@afelixdorn');
//
//    expect((string)$builder)->toBe('#php is:retweet from:@afelixdorn');
// });
//
// it('can build a rule with negated conditions', function () {
//    $builder = RuleBuilder::create('#php')
//        ->not->retweets();
//
//    expect((string)$builder)->toBe('#php -is:retweet');
// });
//
// it('can build a rule with bounding boxes limitation', function () {
//    $builder = RuleBuilder::create('#php')
//        ->boundingBox([15, 20, 30, 40]);
//
//    expect((string)$builder)->toBe('#php bounding_box:[15 20 30 40]');
//
//    $builder = RuleBuilder::create('#php')
//        ->boundingBox([
//            [15, 20, 30, 40],
//            [12, 30, 45, 52]
//        ]);
//
//    expect((string)$builder)->toBe('#php bounding_box:[15 20 30 40] bounding_box:[12 30 45 52]');
//
//    $builder = RuleBuilder::create('#php')
//        ->not->boundingBox([
//            [15, 20, 30, 40],
//            [12, 30, 45, 52]
//        ]);
//
//    expect((string)$builder)->toBe('#php -bounding_box:[15 20 30 40] -bounding_box:[12 30 45 52]');
// });
//
// it('can create a rule wih boolean operators', function () {
//    $builder = RuleBuilder::create('')
//        ->raw('apple')
//        ->or()
//        ->raw('iphone ipad');
//
//    expect((string)$builder)->toBe('apple OR iphone ipad');
// });
//
// it('can createa a rule with grouping', function () {
//    $builder = RuleBuilder::create('skiing')
//        ->group(function (RuleBuilder $builder) {
//            return $builder->raw('-snow')->or()->raw('day')->or()->raw('noschool');
//        });
//
//    expect((string)$builder)->toBe('skiing (-snow OR day OR noschool)');
// });
//
// it('can not negate the sample field', function () {
//    RuleBuilder::create()->not->sample(15);
// })->throws(LogicException::class);
//
// it('can not not negate the nullcast field', function () {
//    RuleBuilder::create()->nullcast();
// })->throws(LogicException::class);
//
// it('can not negate a group', function () {
//    RuleBuilder::create()->not->group(function () {
//    });
// })->throws(LogicException::class);
//
// it('works', function () {
//    $rule = RuleBuilder::create('cats')
//        ->has('images')
//        ->compile();
//
//    expect($rule)->toBe('cats has:images');
// });
//
// it('can combine two attributes with or', function () {
//    $rule = RuleBuilder::create('cats')
//        ->has('images')
//        ->or()
//        ->has('videos')
//        ->compile();
//
//    expect($rule)->toBe('cats has:images or has:videos');
// });
//
// // it('can group attribute inside of an or', function () {
// //    $rule = RuleBuilder::create('cats')
// //        ->has('images')
// //        ->or(function (RuleBuilder $builder) {
// //            $builder->query('puppy')->and()->query('cute');
// //        })->compile();
// //
// //    expect($rule)->toBe('cats has:images OR (puppy AND cute)');
// // })->only();
//
// it('can group attribute inside of an or', function () {
//    $rule = RuleBuilder::create('cats')
//        ->has('images')
//        ->or(function (RuleBuilder $b) {
//            return $b->query('puppy')->and()->query('cute');
//        })->compile();
//
//    expect($rule)->toBe('cats has:images or (puppy and cute)');
// });
