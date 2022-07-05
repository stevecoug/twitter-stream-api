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
foreach($rule->all() as $r) {
    $rule->delete($r->id);
}
$res = $rule->new('cat videos but no images')
    ->query('cat')
    ->save();




$stream
   ->listen(new Connection($bearerToken), function (object $tweet) {
       dump($tweet);
   });
