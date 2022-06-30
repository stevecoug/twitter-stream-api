<?php

use NunoMaduro\Collision\Provider;
use RWC\TwitterStream\Connection;
use RWC\TwitterStream\FilteredStream;
use RWC\TwitterStream\RuleBuilder;
use RWC\TwitterStream\RuleManager;

require __DIR__ . '/vendor/autoload.php';

(new Provider())->register();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$bearerToken = $_ENV['TWITTER_BEARER_TOKEN'];

$stream = new FilteredStream();

// Rule::deleteBulk(...Rule::all());
// RuleBuilder::create('cats')->save();

$connection = new Connection($bearerToken);
$rule       = new RuleManager($connection);
$res = $rule->new('cat videos but no images')
    ->group(fn (RuleBuilder $builder) => $builder->query('cats'))
    ->hasVideos()
    ->save();

dd($res->getBody()->getContents(), $res->getStatusCode());


//
// $stream
//    ->listen(new Connection($bearerToken), function (object $tweet) {
//        dump($tweet);
//    });
//
// foreach ($twitterStream->filteredTweets() as $tweet) {
//    dump($tweet);
// }
