# Twitter Stream API (v2)

Consume the Twitter Stream API v2 in real-time.

[![Tests](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml)
[![Formats](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/redwebcreation/twitter-stream-api/version)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![Total Downloads](https://poser.pugx.org/redwebcreation/twitter-stream-api/downloads)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![License](https://poser.pugx.org/redwebcreation/twitter-stream-api/license)](//packagist.org/packages/redwebcreation/twitter-stream-api)

**This package only supports Twitter API v2 as they're deprecating the v1 and therefore it makes no sense for me to
support it.**

This package is a spiritual successor of `fennb/phirehose`. The major difference apart from the public API is that it's
MIT licensed rather than `GPL` licensed so anyone can use it for any project.

## Getting started

> Requires [PHP 8.0+](https://www.php.net/releases/)
You  can install the package via composer:

```bash
composer require redwebcreation/twitter-stream-api
```

## Usage

```php
use RWC\TwitterStream\TwitterStream;
// Updating arguments named will not be considered a breaking change, be aware of that if you decide to use them.
$twitterStream = new TwitterStream(
    $bearerToken = '',
    $apiKey  = '',
    $apiSecretKey = '',
);

foreach ($twitterStream->filteredTweets() as $tweet) {
    dump($tweet['data']['text']);
}
```

## Concepts

### Rules

Rules are made up of one, or many operators that are combined using boolean logic and parentheses to help define which
Tweets will deliver to your stream.

> You need to create a `TwitterStream` before using anything related to rules.
> Alternatively, you can use `Rule::useBearerToken()` or `Rule::useHttpClient()` for full control.

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

#### Deleting a rule

```php
use RWC\TwitterStream\Rule;

$rule  = Rule::all()[0];
$rule->delete();
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
    new Fieldset('tweet.fields', 'created_at'),
    new Fieldset('expansions', 'author_id')
);
```

Then, pass it to `filteredStream()`

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