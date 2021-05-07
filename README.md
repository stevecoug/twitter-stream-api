# Twitter Stream API (v2)

[![Tests](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml)
[![Formats](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/redwebcreation/twitter-stream-api/version)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![Total Downloads](https://poser.pugx.org/redwebcreation/twitter-stream-api/downloads)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![License](https://poser.pugx.org/redwebcreation/twitter-stream-api/license)](//packagist.org/packages/redwebcreation/twitter-stream-api)

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
use RWC\TwitterStream\TwitterStream;

$twitterStream = new TwitterStream(
    $bearerToken = '',
    $apiKey  = '',
    $apiSecretKey = '',
);

foreach ($twitterStream->filteredTweets() as $tweet) {
    dump($tweet['data']['text']);
    
    if ($enoughTweets) {
        $twitterStream->stopListening();
    }
}
```

## Concepts

### Rules

Rules are made up of one, or many operators that are combined using boolean logic and parentheses to help define which
Tweets will deliver to your stream. Rules are saved in the Twitter API and are persistent.

> You need to create a `TwitterStream` before using anything related to rules.
> Alternatively, you can use `Rule::useBearerToken()` for full control over which token is used.

#### Listing all the rules

```php
use RWC\TwitterStream\Rule;

Rule::all();
```

#### Adding a rule

```php
use RWC\TwitterStream\Rule;

$rule = new Rule('cat has:image', 'cats with images');
$rule->add();
```

If no tag is provided, the fallback is the rule content itself.

#### Deleting a rule

> Note: you can not delete a rule before adding it.

```php
use RWC\TwitterStream\Rule;

$rule  = Rule::all()[0];
$rule->delete();
```

To reduce the number of requests made to Twitter's API, you may want to use bulk rules creation.

```php
use RWC\TwitterStream\Rule;

// One request
Rule::addBulk(
    new Rule('one rule'),
    new Rule('another one')
);

// 2 requests instead of 1 + x rules to delete
Rule::deleteBulk(...Rule::all());
```

### Sets

If you would like to receive additional fields beyond id and text, you will have to specify those fields in your request
with sets.

Sets are also referred as expansions / additional fields in the Twitter documentation.

Sets are a group of `Fieldset`, Twitter exposes three as of now :

* `tweet.fields`
* `user.fields`
* `expansions`

```php
use RWC\TwitterStream\Fieldset;
use RWC\TwitterStream\Sets;

$sets = new Sets(
    new Fieldset('tweet.fields', 'created_at', '...'),
    new Fieldset('expansions', 'author_id', '...')
);
```

Then, pass it to `filteredTweets()`

```php
$twitterStream->filteredTweets($sets);
```

## Testing

```bash
composer test
```

**Twitter Stream API** was created by [Félix Dorn](https://twitter.com/afelixdorn) under
the [MIT License](https://opensource.org/licenses/MIT).

<!-- (179) -->