[//]: # (* todo: groups)

[//]: # (* raw -> content `cat` &#40;NOT AN ARRAY&#41;)

[//]: # (* negated raw operator `-cat`  &#40;NOT AN ARRAY&#41;)

[//]: # (* quoted operator `"cat"` &#40;NOT AN ARRAY&#41;)

[//]: # (* kv operator `key:value` &#40;MAY BE AN ARRAY&#41;)

[//]: # (* kv operator )

[//]: # (* sample operator `sample:value` )

[//]: # (* not Nullcast operator `-is:nullcast`)

[//]: # (* has operator &#40;MAY BE AN ARRAY&#41;)

[//]: # (* is operator &#40;MAY BE AN ARRAY&#41;)

[//]: # (* context operator)

[//]: # (* point radius / bouding box operator &#40;"array" operators&#41;)

[//]: # ()
[//]: # (`andFrom&#40;'value'&#41;` -> raw operator `AND` + kv operator `from:value`)

[//]: # (`andNotFrom&#40;'value'&#41;` -> raw operator `AND` + kv operator `-from:value`)

[//]: # (`withTweetsCount&#40;$min = 0, $max = null&#41;`)

[//]: # (* `notFrom&#40;['a', 'b']&#41;`)
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
