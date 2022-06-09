<?php

namespace RWC\TwitterStream;

use RWC\TwitterStream\Contracts\TwitterStream;

class FilteredStream extends TwitterStream
{
    public function endpoint(): string
    {
        return 'https://api.twitter.com/2/tweets/search/stream';
    }
}
