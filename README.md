# Twitter Stream API (v2)

[![Tests](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml)
[![Formats](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/redwebcreation/twitter-stream-api/version)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![Total Downloads](https://poser.pugx.org/redwebcreation/twitter-stream-api/downloads)](//packagist.org/packages/redwebcreation/twitter-stream-api)

Consume the Twitter Stream API v2 in real-time.

This package is the spiritual successor of `fennb/phirehose`.

## Getting started

> Requires [PHP 8.0+](https://www.php.net/releases/)

You can install the package via composer:

```bash
composer require redwebcreation/twitter-stream-api
```

## Usage

```php
use RWC\TwitterStream\RuleBuilder;
use RWC\TwitterStream\Fieldset;
use RWC\TwitterStream\Sets;
use RWC\TwitterStream\TwitterStream;

$twitterStream = new TwitterStream();
$connection = new \RWC\TwitterStream\Connection(
    $bearerToken = '...',
);
$rule     = new RuleManager($connection);

$rule->save(
    $rule->query('cats')
        ->not->has('images')
        ->has('videos'),
    'dogs without images but with videos'
);
$twitterStream
    ->backfill(2) // for "academic research" accounts only
    ->expansions(['author_id'])
    ->fields(['media.duration_ms', 'media.height'])
    ->fields(['place.full_name', 'place.geo', 'place.id'])
    ->listen($connection, function (array $tweet) {
        echo $tweet['data']['text'];
        
        if ($this->received >= 100) {
            $this->stopListening();
        }
});
```

## Rules

Rules are made up of one or many operators that are combined using boolean logic and parentheses to help define which
Tweets your stream receives. Rules are saved by Twitter and are persistent.

### Client

```php
use RWC\TwitterStream\RuleBuilder;

$rules = new RuleManager($connection);
```

### Listing all the rules

```php
$rules->all();
```

#### Saving a rule

```php
use RWC\TwitterStream\Rule;

$rules->save(
  'cat has:image',
  'cat with an image'
)

// Using saveMany to create many rules is more efficient than using save
// as it only sends one request to Twitter as opposed to sending one request per rule.
$rules->saveMany([
    new Rule('cat has:image', 'cat with an image'),
    new Rule('cat has:video', 'cat with a video'),
    new Rule ('dog -has:image', 'dog without an image'),
])
```

If no tag is provided, the fallback is the rule content itself.

For your convenience, there's a query builder for rules available, learn more [here](#rule-builder).

#### Deleting a rule

```php
use RWC\TwitterStream\Rule;

$rules->delete('THE_RULE_ID_HERE');


// Using deleteMany to create many rules is more efficient than using delete
// as it only sends one request to Twitter as opposed to sending one request per rule.
$rules->deleteMany([
    new Rule('cat has:image', 'cat with an image'),
    new Rule('cat has:video', 'cat with a video'),
    new Rule ('dog -has:image', 'dog without an image'),
])
```

## Rule Builder

```php
use RWC\TwitterStream\RuleBuilder;

$builder = $client->query('php')
    ->group(fn (RuleBuilder $builder) => $builder->raw('tip')->or()->raw('🔥'))
    ->is('retweets')
    ->has('images')
    ->not->has('links');

// Produces #php (tip OR 🔥) is:retweet has:images -has:links
```

You can negate an operator using the magic property `not`.

```php
use RWC\TwitterStream\RuleBuilder;
RuleBuilder::create('#php')
  ->not->is('retweets')
  ->has('links');

// Produces: #php -is:retweet has:links
```

You can also group operators together :

```php
use RWC\TwitterStream\RuleBuilder;
RuleBuilder::create('#laravel')
    ->group(function (RuleBuilder $builder) {
        $builder->raw('tip')->or()->raw('tips')->or()->raw('🔥');
    });

// Produces: #laravel (tip OR tips OR 🔥)
```

### Available methods

* `from` : Matches any Tweet from a specific user.
* `to` : Matches any Tweet that is in reply to a particular user.
* `sample` : Returns a random percent sample of Tweets that match a rule rather than the entire set of Tweets.
* `notNullCast` :  Excludes Tweets created for promotion only on ads.twitter.com. (Must always be negated)
* `replies` :  Deliver only explicit replies that match a rule.
* `retweets` : Matches on Retweets that match the rest of the specified rule.
* `quote` : Returns all Quote Tweets, also known as Tweets with comments.
* `verified` : Deliver only Tweets whose authors are verified by Twitter.
* `retweetsOf` : Matches Tweets that are Retweets of the specified user.
* `context` :  Matches Tweets with a specific domain id and/or domain id, entity id pair.
* `hasHashtags` : Matches Tweets that contain at least one hashtag.
* `hasCashtags` : Matches Tweets that contain a cashtag symbol.
* `hasLinks` : This operator matches Tweets which contain links and media in the Tweet body.
* `hasMentions` : Matches Tweets that mention another Twitter user.
* `hasMedia` : Matches Tweets that contain a media object, such as a photo, GIF, or video, as determined by Twitter.
* `hasImages` : Matches Tweets that contain a recognized URL to an image.
* `hasVideos` :  Matches Tweets that contain native Twitter videos, uploaded directly to Twitter.
* `hasGeographicDataAttached` : Matches Tweets that have Tweet-specific geolocation data provided by the Twitter user.
* `locale` :  Matches Tweets that have been classified by Twitter as being of a particular language
* `url` : Matches on any validly-formatted URL of a Tweet.
* `entity` : Matches Tweets with a specific entity string value.
* `conversation` :  Matches Tweets with a specific entity string value.
* `bio` : Matches a keyword or phrase within the Tweet publisher's bio.
* `bioName` :Matches a keyword within the Tweet publisher's user bio name.
* `bioLocation` :    Matches Tweets that are published by users whose location contains the specified keyword or phrase.
* `place` :    Matches Tweets tagged with the specified location or Twitter place ID.
* `placeCountry` :    Matches Tweets where the country code associated with a tagged place/location matches the given
  ISO alpha-2 character code.
* `pointRadius` : Matches against the place.geo.coordinates object of the Tweet when present, and in Twitter, against a
  place geo polygon, where the Place polygon is fully contained within the defined region.
* `boundingBox` : Matches against the place.geo.coordinates object of the Tweet when present, and in Twitter, against a
  place geo polygon, where the place polygon is fully contained within the defined region.

## Testing

```bash
composer test
```

**Twitter Stream API** was created by [Félix Dorn](https://twitter.com/afelixdorn) under
the [MIT License](https://opensource.org/licenses/MIT).

<!-- (179) -->
