<?php

namespace stevecoug\TwitterStream\Streams;

use stevecoug\TwitterStream\TwitterStream;

class VolumeStream extends TwitterStream
{
    public function endpoint(): string
    {
        return 'https://api.twitter.com/2/tweets/sample/stream';
    }
}
