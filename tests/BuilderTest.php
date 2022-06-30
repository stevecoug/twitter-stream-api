<?php

use RWC\TwitterStream\RuleBuilder;

function query(string $q = '')
{
    return (new RuleBuilder())->raw($q);
}

it('can compile a query', function () {
    expect(query('php')->compile())->toBe('php');
});

it('can compile a query with an attribute', function () {
    expect(query('php')->lang('en')->compile())->toBe('php lang:en');
});

it('can compile a query with many attributes', function () {
    expect(query('php')->lang('en')->has('images')->compile())->toBe('php lang:en has:images');
});

it('can compile a query with a negated attribute', function () {
    expect(query('php')->hasNot('images')->compile())->toBe('php -has:images');
});

it('can compile a query with many negated attributes', function () {
    expect(query('php')->hasNot('images')->hasNot('videos')->compile())->toBe('php -has:images -has:videos');
});

it('can compile a query with mixed negated and non-negated attributes', function () {
    expect(query('php')->hasNot('images')->lang('en')->hasNot('videos')->compile())->toBe('php -has:images lang:en -has:videos');
});

it('can compile a query with attributes linked by OR', function () {
    expect(query('php')->lang('en')->or->has('images')->compile())->toBe('php lang:en or has:images');
});

it('can compile a query with attributes linked by AND', function () {
    expect(query('php')->lang('en')->and->has('images')->compile())->toBe('php lang:en and has:images');
});

it('can compile a query with attributes linked by OR and AND', function () {
    expect(query('php')->lang('en')->or->has('images')->and->has('videos')->compile())->toBe('php lang:en or has:images and has:videos');
});

it('can compile a query with a group', function () {
    expect(query('php')->group(function (RuleBuilder $b) {
        $b->lang('en')->and->has('images');
    })->compile())->toBe('php (lang:en and has:images)');
});

it('can compile a query with an or group', function () {
    expect(query('cats')->has('images')->or->group(function (RuleBuilder $b) {
        return $b->lang('en')->and->has('videos');
    })->compile())->toBe('cats has:images or (lang:en and has:videos)');
});

it('can compile a query with an and group', function () {
    expect(query('cats')->has('images')->and->group(function (RuleBuilder $b) {
        return $b->lang('en')->or->has('videos');
    })->compile())->toBe('cats has:images and (lang:en or has:videos)');
});

it('can compile a point radius attribute', function () {
    expect(query('dogs')->pointRadius('42', '-42', '4.2')->compile())
        ->toBe('dogs point_radius:[42 -42 4.2]');
});

it('can compile a bounding box attribute', function () {
    expect(query('dogs')->boundingBox('1', '2', '3', '4')->compile())
        ->toBe('dogs bounding_box:[1 2 3 4]');
});

it('can compile a has attribute passed as a string', function () {
    expect(query('dogs')->has('images')->compile())
        ->toBe('dogs has:images');
});

it('can compile many has attributes passed as strings', function () {
    expect(query('dogs')->has('images')->has('videos')->compile())
        ->toBe('dogs has:images has:videos');
});

it('can compile a has attribute passed as an array', function () {
    expect(query('dogs')->has(['images', 'videos'])->compile())
        ->toBe('dogs has:images has:videos');
});

it('can compile many has attributes passed as arrays', function () {
    expect(query('dogs')->has(['images', 'videos'])->has(['geo', 'links'])->compile())
        ->toBe('dogs has:images has:videos has:geo has:links');
});

it('can compile has attribute using the shorthand', function () {
    expect(query('pig')->hasImages()->hasGeo()->hasVideos()->compile())
        ->toBe('pig has:images has:geo has:videos');
});

it('fails if you access an undefined property', function () {
    query('php')->foo;
})->throws(ErrorException::class, 'Undefined property: RWC\TwitterStream\RuleBuilder::$foo');

it('can compile an is attribute', function () {
    expect(query('doggo')->is('quote')->compile())->toBe('doggo is:quote');
});

it('can compile many is attribute', function () {
    expect(query('doggo')->is('quote')->is('reply')->compile())->toBe('doggo is:quote is:reply');
});

it('can compile an is attribute passed as an array', function () {
    expect(query('dogs')->is(['images', 'videos'])->compile())
        ->toBe('dogs is:images is:videos');
});

it('can compile many is attributes passed as arrays', function () {
    expect(query('dogs')->is(['images', 'videos'])->is(['geo', 'links'])->compile())
        ->toBe('dogs is:images is:videos is:geo is:links');
});

it('can compile has attribute using the shorthand method', function () {
    expect(query('pig')->isVerified()->isQuote()->isVerified()->compile())
        ->toBe('pig is:verified is:quote is:verified');
});

it('can pass raw strings to be compiled as is', function () {
    expect(query()->raw('hello')->raw('world')->compile())->toBe('hello world');
});

it('can compile a negated nullcast attribute', function () {
    expect(query('mobile games')->notNullCast()->compile())->toBe('"mobile games" -is:nullcast');
});

it('can compile quoted raw attributes', function () {
    expect(query()->raw('mobile games')->compile())->toBe('"mobile games"');
});

it('can compile many quoted raw attributes', function () {
    expect(query()->raw('mobile games')->raw('something else')->compile())->toBe('"mobile games" "something else"');
});

it('can quote values', function () {
    $rule = query()
        ->bio(['some thing', 'this', 'that too'])
        ->compile();

    expect($rule)->toBe('bio:"some thing" bio:this bio:"that too"');
});
