<?php

require __DIR__ . '/../vendor/autoload.php';

use RWC\Phirehose\Enums\Method;
use RWC\Phirehose\OauthPhirehose;

/**
 * Example of using Phirehose to display a live filtered stream using track words.
 */
class FilterTrackConsumer extends OauthPhirehose
{
    /**
     * Enqueue each status.
     *
     * @param string $status
     */
    public function enqueueStatus($status)
    {
        /*
         * In this simple example, we will just display to STDOUT rather than enqueue.
         * NOTE: You should NOT be processing tweets at this point in a real application, instead they should be being
         *       enqueued and processed asyncronously from the collection process.
         */
        $data = json_decode($status, true);
        if (is_array($data) && isset($data['user']['screen_name'])) {
            echo $data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n";
        }
    }
}

// Start streaming
$sc = new FilterTrackConsumer('OAUTH_TOKEN', 'OAUTH_SECRET', Method::filter());
$sc->setConsumerDetails('consumer key', 'consumer secret');
$sc->setTrack(['morning', 'goodnight', 'hello', 'the']);
$sc->consume();
