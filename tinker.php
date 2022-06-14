<?php

use NunoMaduro\Collision\Provider;
use RWC\TwitterStream\Connection;
use RWC\TwitterStream\FilteredStream;
use RWC\TwitterStream\Rule;
use RWC\TwitterStream\RuleBuilder;
use RWC\TwitterStream\TwitterStream;

require __DIR__ . '/vendor/autoload.php';

(new Provider)->register();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$bearerToken = $_ENV['TWITTER_BEARER_TOKEN'];

$stream = new FilteredStream();

//Rule::deleteBulk(...Rule::all());
//RuleBuilder::create('cats')->save();

$connection = new Connection($bearerToken);
$client = new \RWC\TwitterStream\TwitterClient($connection);

dd($client->allRules());

$stream
    ->listen(new Connection($bearerToken), function (object $tweet) {
        dump($tweet);
    });

//
//foreach ($twitterStream->filteredTweets() as $tweet) {
//    dump($tweet);
//}
