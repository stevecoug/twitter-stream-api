* todo: groups
* raw -> content `cat` (NOT AN ARRAY)
* negated raw operator `-cat`  (NOT AN ARRAY)
* quoted operator `"cat"` (NOT AN ARRAY)
* kv operator `key:value` (MAY BE AN ARRAY)
* kv operator 
* sample operator `sample:value` 
* not Nullcast operator `-is:nullcast`
* has operator (MAY BE AN ARRAY)
* is operator (MAY BE AN ARRAY)
* context operator
* point radius / bouding box operator ("array" operators)

`andFrom('value')` -> raw operator `AND` + kv operator `from:value`
`andNotFrom('value')` -> raw operator `AND` + kv operator `-from:value`
`withTweetsCount($min = 0, $max = null)`
* `notFrom(['a', 'b'])`
# Twitter Stream API (v2)

[![Tests](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/tests.yml)
[![Formats](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml/badge.svg?branch=master)](https://github.com/redwebcreation/twitter-stream-api/actions/workflows/formats.yml)
[![Version](https://poser.pugx.org/redwebcreation/twitter-stream-api/version)](//packagist.org/packages/redwebcreation/twitter-stream-api)
[![Total Downloads](https://poser.pugx.org/redwebcreation/twitter-stream-api/downloads)](//packagist.org/packages/redwebcreation/twitter-stream-api)

Consume the Twitter Stream API v2 in real-time.

This package is the spiritual successor of `fennb/phirehose`.

## Getting started

> Requires [PHP 8.1+](https://www.php.net/releases/)


You can install the package via composer:

```bash
composer require redwebcreation/twitter-stream-api
```

> **Updating from v2 to v3?** Read the [upgrade guide](UPGRADE.md).

## Documentation

You can find complete documentation [here](https://felixdorn.fr/blog/listening-twitter-stream-api-real-time-php?r=github-readme).

## Testing

```bash
composer test
```

**Twitter Stream API** was created by [Félix Dorn](https://twitter.com/afelixdorn) under
the [MIT License](https://opensource.org/licenses/MIT).

<!-- (179) -->
