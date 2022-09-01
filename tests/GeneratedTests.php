<?php

use Felix\TwitterStream\RuleBuilder;
/** Do not edit manually; changes will be lost. */
it('compiles', function ($value, $arguments, $expected) {
    expect((new RuleBuilder())->{$value}(...$arguments)->compile())->toBe($expected);
})->with(array (
  0 => 
  array (
    0 => 'isRetweet',
    1 => 
    array (
    ),
    2 => 'is:retweet',
  ),
  1 => 
  array (
    0 => 'isNotRetweet',
    1 => 
    array (
    ),
    2 => '-is:retweet',
  ),
  2 => 
  array (
    0 => 'isNotRetweet',
    1 => 
    array (
    ),
    2 => '-is:retweet',
  ),
  3 => 
  array (
    0 => 'orIsRetweet',
    1 => 
    array (
    ),
    2 => 'OR is:retweet',
  ),
  4 => 
  array (
    0 => 'orIsNotRetweet',
    1 => 
    array (
    ),
    2 => 'OR -is:retweet',
  ),
  5 => 
  array (
    0 => 'andIsRetweet',
    1 => 
    array (
    ),
    2 => 'is:retweet',
  ),
  6 => 
  array (
    0 => 'andIsNotRetweet',
    1 => 
    array (
    ),
    2 => '-is:retweet',
  ),
  7 => 
  array (
    0 => 'isReply',
    1 => 
    array (
    ),
    2 => 'is:reply',
  ),
  8 => 
  array (
    0 => 'isNotReply',
    1 => 
    array (
    ),
    2 => '-is:reply',
  ),
  9 => 
  array (
    0 => 'isNotReply',
    1 => 
    array (
    ),
    2 => '-is:reply',
  ),
  10 => 
  array (
    0 => 'orIsReply',
    1 => 
    array (
    ),
    2 => 'OR is:reply',
  ),
  11 => 
  array (
    0 => 'orIsNotReply',
    1 => 
    array (
    ),
    2 => 'OR -is:reply',
  ),
  12 => 
  array (
    0 => 'andIsReply',
    1 => 
    array (
    ),
    2 => 'is:reply',
  ),
  13 => 
  array (
    0 => 'andIsNotReply',
    1 => 
    array (
    ),
    2 => '-is:reply',
  ),
  14 => 
  array (
    0 => 'isQuote',
    1 => 
    array (
    ),
    2 => 'is:quote',
  ),
  15 => 
  array (
    0 => 'isNotQuote',
    1 => 
    array (
    ),
    2 => '-is:quote',
  ),
  16 => 
  array (
    0 => 'isNotQuote',
    1 => 
    array (
    ),
    2 => '-is:quote',
  ),
  17 => 
  array (
    0 => 'orIsQuote',
    1 => 
    array (
    ),
    2 => 'OR is:quote',
  ),
  18 => 
  array (
    0 => 'orIsNotQuote',
    1 => 
    array (
    ),
    2 => 'OR -is:quote',
  ),
  19 => 
  array (
    0 => 'andIsQuote',
    1 => 
    array (
    ),
    2 => 'is:quote',
  ),
  20 => 
  array (
    0 => 'andIsNotQuote',
    1 => 
    array (
    ),
    2 => '-is:quote',
  ),
  21 => 
  array (
    0 => 'isVerified',
    1 => 
    array (
    ),
    2 => 'is:verified',
  ),
  22 => 
  array (
    0 => 'isNotVerified',
    1 => 
    array (
    ),
    2 => '-is:verified',
  ),
  23 => 
  array (
    0 => 'isNotVerified',
    1 => 
    array (
    ),
    2 => '-is:verified',
  ),
  24 => 
  array (
    0 => 'orIsVerified',
    1 => 
    array (
    ),
    2 => 'OR is:verified',
  ),
  25 => 
  array (
    0 => 'orIsNotVerified',
    1 => 
    array (
    ),
    2 => 'OR -is:verified',
  ),
  26 => 
  array (
    0 => 'andIsVerified',
    1 => 
    array (
    ),
    2 => 'is:verified',
  ),
  27 => 
  array (
    0 => 'andIsNotVerified',
    1 => 
    array (
    ),
    2 => '-is:verified',
  ),
  28 => 
  array (
    0 => 'hasHashtags',
    1 => 
    array (
    ),
    2 => 'has:hashtags',
  ),
  29 => 
  array (
    0 => 'hasNotHashtags',
    1 => 
    array (
    ),
    2 => '-has:hashtags',
  ),
  30 => 
  array (
    0 => 'hasNotHashtags',
    1 => 
    array (
    ),
    2 => '-has:hashtags',
  ),
  31 => 
  array (
    0 => 'orHasHashtags',
    1 => 
    array (
    ),
    2 => 'OR has:hashtags',
  ),
  32 => 
  array (
    0 => 'orHasNotHashtags',
    1 => 
    array (
    ),
    2 => 'OR -has:hashtags',
  ),
  33 => 
  array (
    0 => 'andHasHashtags',
    1 => 
    array (
    ),
    2 => 'has:hashtags',
  ),
  34 => 
  array (
    0 => 'andHasNotHashtags',
    1 => 
    array (
    ),
    2 => '-has:hashtags',
  ),
  35 => 
  array (
    0 => 'hasCashtags',
    1 => 
    array (
    ),
    2 => 'has:cashtags',
  ),
  36 => 
  array (
    0 => 'hasNotCashtags',
    1 => 
    array (
    ),
    2 => '-has:cashtags',
  ),
  37 => 
  array (
    0 => 'hasNotCashtags',
    1 => 
    array (
    ),
    2 => '-has:cashtags',
  ),
  38 => 
  array (
    0 => 'orHasCashtags',
    1 => 
    array (
    ),
    2 => 'OR has:cashtags',
  ),
  39 => 
  array (
    0 => 'orHasNotCashtags',
    1 => 
    array (
    ),
    2 => 'OR -has:cashtags',
  ),
  40 => 
  array (
    0 => 'andHasCashtags',
    1 => 
    array (
    ),
    2 => 'has:cashtags',
  ),
  41 => 
  array (
    0 => 'andHasNotCashtags',
    1 => 
    array (
    ),
    2 => '-has:cashtags',
  ),
  42 => 
  array (
    0 => 'hasLinks',
    1 => 
    array (
    ),
    2 => 'has:links',
  ),
  43 => 
  array (
    0 => 'hasNotLinks',
    1 => 
    array (
    ),
    2 => '-has:links',
  ),
  44 => 
  array (
    0 => 'hasNotLinks',
    1 => 
    array (
    ),
    2 => '-has:links',
  ),
  45 => 
  array (
    0 => 'orHasLinks',
    1 => 
    array (
    ),
    2 => 'OR has:links',
  ),
  46 => 
  array (
    0 => 'orHasNotLinks',
    1 => 
    array (
    ),
    2 => 'OR -has:links',
  ),
  47 => 
  array (
    0 => 'andHasLinks',
    1 => 
    array (
    ),
    2 => 'has:links',
  ),
  48 => 
  array (
    0 => 'andHasNotLinks',
    1 => 
    array (
    ),
    2 => '-has:links',
  ),
  49 => 
  array (
    0 => 'hasMentions',
    1 => 
    array (
    ),
    2 => 'has:mentions',
  ),
  50 => 
  array (
    0 => 'hasNotMentions',
    1 => 
    array (
    ),
    2 => '-has:mentions',
  ),
  51 => 
  array (
    0 => 'hasNotMentions',
    1 => 
    array (
    ),
    2 => '-has:mentions',
  ),
  52 => 
  array (
    0 => 'orHasMentions',
    1 => 
    array (
    ),
    2 => 'OR has:mentions',
  ),
  53 => 
  array (
    0 => 'orHasNotMentions',
    1 => 
    array (
    ),
    2 => 'OR -has:mentions',
  ),
  54 => 
  array (
    0 => 'andHasMentions',
    1 => 
    array (
    ),
    2 => 'has:mentions',
  ),
  55 => 
  array (
    0 => 'andHasNotMentions',
    1 => 
    array (
    ),
    2 => '-has:mentions',
  ),
  56 => 
  array (
    0 => 'hasMedia',
    1 => 
    array (
    ),
    2 => 'has:media',
  ),
  57 => 
  array (
    0 => 'hasNotMedia',
    1 => 
    array (
    ),
    2 => '-has:media',
  ),
  58 => 
  array (
    0 => 'hasNotMedia',
    1 => 
    array (
    ),
    2 => '-has:media',
  ),
  59 => 
  array (
    0 => 'orHasMedia',
    1 => 
    array (
    ),
    2 => 'OR has:media',
  ),
  60 => 
  array (
    0 => 'orHasNotMedia',
    1 => 
    array (
    ),
    2 => 'OR -has:media',
  ),
  61 => 
  array (
    0 => 'andHasMedia',
    1 => 
    array (
    ),
    2 => 'has:media',
  ),
  62 => 
  array (
    0 => 'andHasNotMedia',
    1 => 
    array (
    ),
    2 => '-has:media',
  ),
  63 => 
  array (
    0 => 'hasImages',
    1 => 
    array (
    ),
    2 => 'has:images',
  ),
  64 => 
  array (
    0 => 'hasNotImages',
    1 => 
    array (
    ),
    2 => '-has:images',
  ),
  65 => 
  array (
    0 => 'hasNotImages',
    1 => 
    array (
    ),
    2 => '-has:images',
  ),
  66 => 
  array (
    0 => 'orHasImages',
    1 => 
    array (
    ),
    2 => 'OR has:images',
  ),
  67 => 
  array (
    0 => 'orHasNotImages',
    1 => 
    array (
    ),
    2 => 'OR -has:images',
  ),
  68 => 
  array (
    0 => 'andHasImages',
    1 => 
    array (
    ),
    2 => 'has:images',
  ),
  69 => 
  array (
    0 => 'andHasNotImages',
    1 => 
    array (
    ),
    2 => '-has:images',
  ),
  70 => 
  array (
    0 => 'hasVideos',
    1 => 
    array (
    ),
    2 => 'has:videos',
  ),
  71 => 
  array (
    0 => 'hasNotVideos',
    1 => 
    array (
    ),
    2 => '-has:videos',
  ),
  72 => 
  array (
    0 => 'hasNotVideos',
    1 => 
    array (
    ),
    2 => '-has:videos',
  ),
  73 => 
  array (
    0 => 'orHasVideos',
    1 => 
    array (
    ),
    2 => 'OR has:videos',
  ),
  74 => 
  array (
    0 => 'orHasNotVideos',
    1 => 
    array (
    ),
    2 => 'OR -has:videos',
  ),
  75 => 
  array (
    0 => 'andHasVideos',
    1 => 
    array (
    ),
    2 => 'has:videos',
  ),
  76 => 
  array (
    0 => 'andHasNotVideos',
    1 => 
    array (
    ),
    2 => '-has:videos',
  ),
  77 => 
  array (
    0 => 'hasGeo',
    1 => 
    array (
    ),
    2 => 'has:geo',
  ),
  78 => 
  array (
    0 => 'hasNotGeo',
    1 => 
    array (
    ),
    2 => '-has:geo',
  ),
  79 => 
  array (
    0 => 'hasNotGeo',
    1 => 
    array (
    ),
    2 => '-has:geo',
  ),
  80 => 
  array (
    0 => 'orHasGeo',
    1 => 
    array (
    ),
    2 => 'OR has:geo',
  ),
  81 => 
  array (
    0 => 'orHasNotGeo',
    1 => 
    array (
    ),
    2 => 'OR -has:geo',
  ),
  82 => 
  array (
    0 => 'andHasGeo',
    1 => 
    array (
    ),
    2 => 'has:geo',
  ),
  83 => 
  array (
    0 => 'andHasNotGeo',
    1 => 
    array (
    ),
    2 => '-has:geo',
  ),
  84 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'from:a',
  ),
  85 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-from:a',
  ),
  86 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR from:a',
  ),
  87 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -from:a',
  ),
  88 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'from:a',
  ),
  89 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-from:a',
  ),
  90 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'from:b',
  ),
  91 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-from:b',
  ),
  92 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR from:b',
  ),
  93 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -from:b',
  ),
  94 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'from:b',
  ),
  95 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-from:b',
  ),
  96 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a from:b',
  ),
  97 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a -from:b',
  ),
  98 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a OR from:b',
  ),
  99 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a OR -from:b',
  ),
  100 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a from:b',
  ),
  101 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a -from:b',
  ),
  102 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'from:a from:b',
  ),
  103 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-from:a -from:b',
  ),
  104 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'from:a OR from:b',
  ),
  105 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-from:a OR -from:b',
  ),
  106 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'from:a from:b',
  ),
  107 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-from:a -from:b',
  ),
  108 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'to:a',
  ),
  109 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-to:a',
  ),
  110 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR to:a',
  ),
  111 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -to:a',
  ),
  112 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'to:a',
  ),
  113 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-to:a',
  ),
  114 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'to:b',
  ),
  115 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-to:b',
  ),
  116 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR to:b',
  ),
  117 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -to:b',
  ),
  118 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'to:b',
  ),
  119 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-to:b',
  ),
  120 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a to:b',
  ),
  121 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a -to:b',
  ),
  122 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a OR to:b',
  ),
  123 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a OR -to:b',
  ),
  124 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a to:b',
  ),
  125 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a -to:b',
  ),
  126 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'to:a to:b',
  ),
  127 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-to:a -to:b',
  ),
  128 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'to:a OR to:b',
  ),
  129 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-to:a OR -to:b',
  ),
  130 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'to:a to:b',
  ),
  131 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-to:a -to:b',
  ),
  132 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url:a',
  ),
  133 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url:a',
  ),
  134 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR url:a',
  ),
  135 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -url:a',
  ),
  136 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url:a',
  ),
  137 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url:a',
  ),
  138 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url:b',
  ),
  139 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url:b',
  ),
  140 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR url:b',
  ),
  141 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -url:b',
  ),
  142 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url:b',
  ),
  143 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url:b',
  ),
  144 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a url:b',
  ),
  145 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a -url:b',
  ),
  146 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a OR url:b',
  ),
  147 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a OR -url:b',
  ),
  148 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a url:b',
  ),
  149 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a -url:b',
  ),
  150 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url:a url:b',
  ),
  151 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url:a -url:b',
  ),
  152 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url:a OR url:b',
  ),
  153 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url:a OR -url:b',
  ),
  154 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url:a url:b',
  ),
  155 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url:a -url:b',
  ),
  156 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of:a',
  ),
  157 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of:a',
  ),
  158 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR retweets_of:a',
  ),
  159 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -retweets_of:a',
  ),
  160 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of:a',
  ),
  161 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of:a',
  ),
  162 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'retweets_of:b',
  ),
  163 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-retweets_of:b',
  ),
  164 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR retweets_of:b',
  ),
  165 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -retweets_of:b',
  ),
  166 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'retweets_of:b',
  ),
  167 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-retweets_of:b',
  ),
  168 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  169 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  170 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a OR retweets_of:b',
  ),
  171 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a OR -retweets_of:b',
  ),
  172 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  173 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  174 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  175 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  176 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of:a OR retweets_of:b',
  ),
  177 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of:a OR -retweets_of:b',
  ),
  178 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  179 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  180 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'context:a',
  ),
  181 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-context:a',
  ),
  182 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR context:a',
  ),
  183 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -context:a',
  ),
  184 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'context:a',
  ),
  185 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-context:a',
  ),
  186 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'context:b',
  ),
  187 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-context:b',
  ),
  188 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR context:b',
  ),
  189 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -context:b',
  ),
  190 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'context:b',
  ),
  191 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-context:b',
  ),
  192 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a context:b',
  ),
  193 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a -context:b',
  ),
  194 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a OR context:b',
  ),
  195 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a OR -context:b',
  ),
  196 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a context:b',
  ),
  197 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a -context:b',
  ),
  198 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'context:a context:b',
  ),
  199 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-context:a -context:b',
  ),
  200 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'context:a OR context:b',
  ),
  201 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-context:a OR -context:b',
  ),
  202 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'context:a context:b',
  ),
  203 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-context:a -context:b',
  ),
  204 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'entity:a',
  ),
  205 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-entity:a',
  ),
  206 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR entity:a',
  ),
  207 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -entity:a',
  ),
  208 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'entity:a',
  ),
  209 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-entity:a',
  ),
  210 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'entity:b',
  ),
  211 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-entity:b',
  ),
  212 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR entity:b',
  ),
  213 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -entity:b',
  ),
  214 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'entity:b',
  ),
  215 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-entity:b',
  ),
  216 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a entity:b',
  ),
  217 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a -entity:b',
  ),
  218 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a OR entity:b',
  ),
  219 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a OR -entity:b',
  ),
  220 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a entity:b',
  ),
  221 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a -entity:b',
  ),
  222 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'entity:a entity:b',
  ),
  223 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-entity:a -entity:b',
  ),
  224 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'entity:a OR entity:b',
  ),
  225 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-entity:a OR -entity:b',
  ),
  226 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'entity:a entity:b',
  ),
  227 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-entity:a -entity:b',
  ),
  228 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'conversation_id:a',
  ),
  229 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-conversation_id:a',
  ),
  230 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR conversation_id:a',
  ),
  231 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -conversation_id:a',
  ),
  232 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'conversation_id:a',
  ),
  233 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-conversation_id:a',
  ),
  234 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'conversation_id:b',
  ),
  235 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-conversation_id:b',
  ),
  236 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR conversation_id:b',
  ),
  237 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -conversation_id:b',
  ),
  238 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'conversation_id:b',
  ),
  239 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-conversation_id:b',
  ),
  240 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  241 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  242 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a OR conversation_id:b',
  ),
  243 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a OR -conversation_id:b',
  ),
  244 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  245 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  246 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  247 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  248 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'conversation_id:a OR conversation_id:b',
  ),
  249 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-conversation_id:a OR -conversation_id:b',
  ),
  250 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  251 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  252 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio:a',
  ),
  253 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio:a',
  ),
  254 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR bio:a',
  ),
  255 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -bio:a',
  ),
  256 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio:a',
  ),
  257 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio:a',
  ),
  258 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio:b',
  ),
  259 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio:b',
  ),
  260 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR bio:b',
  ),
  261 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -bio:b',
  ),
  262 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio:b',
  ),
  263 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio:b',
  ),
  264 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a bio:b',
  ),
  265 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a -bio:b',
  ),
  266 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a OR bio:b',
  ),
  267 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a OR -bio:b',
  ),
  268 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a bio:b',
  ),
  269 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a -bio:b',
  ),
  270 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio:a bio:b',
  ),
  271 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio:a -bio:b',
  ),
  272 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio:a OR bio:b',
  ),
  273 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio:a OR -bio:b',
  ),
  274 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio:a bio:b',
  ),
  275 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio:a -bio:b',
  ),
  276 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_name:a',
  ),
  277 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_name:a',
  ),
  278 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR bio_name:a',
  ),
  279 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -bio_name:a',
  ),
  280 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_name:a',
  ),
  281 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_name:a',
  ),
  282 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio_name:b',
  ),
  283 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_name:b',
  ),
  284 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR bio_name:b',
  ),
  285 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -bio_name:b',
  ),
  286 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio_name:b',
  ),
  287 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_name:b',
  ),
  288 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  289 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  290 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a OR bio_name:b',
  ),
  291 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a OR -bio_name:b',
  ),
  292 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  293 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  294 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  295 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  296 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_name:a OR bio_name:b',
  ),
  297 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_name:a OR -bio_name:b',
  ),
  298 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  299 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  300 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_location:a',
  ),
  301 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_location:a',
  ),
  302 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR bio_location:a',
  ),
  303 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -bio_location:a',
  ),
  304 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_location:a',
  ),
  305 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_location:a',
  ),
  306 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio_location:b',
  ),
  307 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_location:b',
  ),
  308 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR bio_location:b',
  ),
  309 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -bio_location:b',
  ),
  310 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'bio_location:b',
  ),
  311 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_location:b',
  ),
  312 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  313 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  314 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a OR bio_location:b',
  ),
  315 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a OR -bio_location:b',
  ),
  316 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  317 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  318 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  319 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  320 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_location:a OR bio_location:b',
  ),
  321 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_location:a OR -bio_location:b',
  ),
  322 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  323 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  324 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place:a',
  ),
  325 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place:a',
  ),
  326 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR place:a',
  ),
  327 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -place:a',
  ),
  328 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place:a',
  ),
  329 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place:a',
  ),
  330 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'place:b',
  ),
  331 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place:b',
  ),
  332 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR place:b',
  ),
  333 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -place:b',
  ),
  334 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'place:b',
  ),
  335 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place:b',
  ),
  336 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a place:b',
  ),
  337 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a -place:b',
  ),
  338 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a OR place:b',
  ),
  339 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a OR -place:b',
  ),
  340 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a place:b',
  ),
  341 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a -place:b',
  ),
  342 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place:a place:b',
  ),
  343 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place:a -place:b',
  ),
  344 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place:a OR place:b',
  ),
  345 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place:a OR -place:b',
  ),
  346 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place:a place:b',
  ),
  347 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place:a -place:b',
  ),
  348 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place_country:a',
  ),
  349 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place_country:a',
  ),
  350 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR place_country:a',
  ),
  351 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -place_country:a',
  ),
  352 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place_country:a',
  ),
  353 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place_country:a',
  ),
  354 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'place_country:b',
  ),
  355 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place_country:b',
  ),
  356 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR place_country:b',
  ),
  357 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -place_country:b',
  ),
  358 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'place_country:b',
  ),
  359 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place_country:b',
  ),
  360 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a place_country:b',
  ),
  361 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a -place_country:b',
  ),
  362 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a OR place_country:b',
  ),
  363 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a OR -place_country:b',
  ),
  364 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a place_country:b',
  ),
  365 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a -place_country:b',
  ),
  366 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place_country:a place_country:b',
  ),
  367 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place_country:a -place_country:b',
  ),
  368 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place_country:a OR place_country:b',
  ),
  369 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place_country:a OR -place_country:b',
  ),
  370 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'place_country:a place_country:b',
  ),
  371 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-place_country:a -place_country:b',
  ),
  372 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'lang:a',
  ),
  373 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-lang:a',
  ),
  374 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR lang:a',
  ),
  375 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -lang:a',
  ),
  376 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'lang:a',
  ),
  377 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-lang:a',
  ),
  378 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'lang:b',
  ),
  379 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-lang:b',
  ),
  380 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR lang:b',
  ),
  381 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -lang:b',
  ),
  382 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'lang:b',
  ),
  383 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-lang:b',
  ),
  384 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a lang:b',
  ),
  385 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a -lang:b',
  ),
  386 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a OR lang:b',
  ),
  387 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a OR -lang:b',
  ),
  388 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a lang:b',
  ),
  389 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a -lang:b',
  ),
  390 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'lang:a lang:b',
  ),
  391 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-lang:a -lang:b',
  ),
  392 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'lang:a OR lang:b',
  ),
  393 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-lang:a OR -lang:b',
  ),
  394 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'lang:a lang:b',
  ),
  395 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-lang:a -lang:b',
  ),
  396 => 
  array (
    0 => 'urlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_title:a',
  ),
  397 => 
  array (
    0 => 'notUrlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_title:a',
  ),
  398 => 
  array (
    0 => 'orUrlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR url_title:a',
  ),
  399 => 
  array (
    0 => 'orNotUrlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -url_title:a',
  ),
  400 => 
  array (
    0 => 'andUrlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_title:a',
  ),
  401 => 
  array (
    0 => 'andNotUrlTitle',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_title:a',
  ),
  402 => 
  array (
    0 => 'urlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_title:b',
  ),
  403 => 
  array (
    0 => 'notUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_title:b',
  ),
  404 => 
  array (
    0 => 'orUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR url_title:b',
  ),
  405 => 
  array (
    0 => 'orNotUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -url_title:b',
  ),
  406 => 
  array (
    0 => 'andUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_title:b',
  ),
  407 => 
  array (
    0 => 'andNotUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_title:b',
  ),
  408 => 
  array (
    0 => 'urlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_title:a url_title:b',
  ),
  409 => 
  array (
    0 => 'notUrlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_title:a -url_title:b',
  ),
  410 => 
  array (
    0 => 'orUrlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_title:a OR url_title:b',
  ),
  411 => 
  array (
    0 => 'orNotUrlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_title:a OR -url_title:b',
  ),
  412 => 
  array (
    0 => 'andUrlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_title:a url_title:b',
  ),
  413 => 
  array (
    0 => 'andNotUrlTitle',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_title:a -url_title:b',
  ),
  414 => 
  array (
    0 => 'urlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_title:a url_title:b',
  ),
  415 => 
  array (
    0 => 'notUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_title:a -url_title:b',
  ),
  416 => 
  array (
    0 => 'orUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_title:a OR url_title:b',
  ),
  417 => 
  array (
    0 => 'orNotUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_title:a OR -url_title:b',
  ),
  418 => 
  array (
    0 => 'andUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_title:a url_title:b',
  ),
  419 => 
  array (
    0 => 'andNotUrlTitle',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_title:a -url_title:b',
  ),
  420 => 
  array (
    0 => 'urlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_description:a',
  ),
  421 => 
  array (
    0 => 'notUrlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_description:a',
  ),
  422 => 
  array (
    0 => 'orUrlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR url_description:a',
  ),
  423 => 
  array (
    0 => 'orNotUrlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -url_description:a',
  ),
  424 => 
  array (
    0 => 'andUrlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_description:a',
  ),
  425 => 
  array (
    0 => 'andNotUrlDescription',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_description:a',
  ),
  426 => 
  array (
    0 => 'urlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_description:b',
  ),
  427 => 
  array (
    0 => 'notUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_description:b',
  ),
  428 => 
  array (
    0 => 'orUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR url_description:b',
  ),
  429 => 
  array (
    0 => 'orNotUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -url_description:b',
  ),
  430 => 
  array (
    0 => 'andUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_description:b',
  ),
  431 => 
  array (
    0 => 'andNotUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_description:b',
  ),
  432 => 
  array (
    0 => 'urlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_description:a url_description:b',
  ),
  433 => 
  array (
    0 => 'notUrlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_description:a -url_description:b',
  ),
  434 => 
  array (
    0 => 'orUrlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_description:a OR url_description:b',
  ),
  435 => 
  array (
    0 => 'orNotUrlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_description:a OR -url_description:b',
  ),
  436 => 
  array (
    0 => 'andUrlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_description:a url_description:b',
  ),
  437 => 
  array (
    0 => 'andNotUrlDescription',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_description:a -url_description:b',
  ),
  438 => 
  array (
    0 => 'urlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_description:a url_description:b',
  ),
  439 => 
  array (
    0 => 'notUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_description:a -url_description:b',
  ),
  440 => 
  array (
    0 => 'orUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_description:a OR url_description:b',
  ),
  441 => 
  array (
    0 => 'orNotUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_description:a OR -url_description:b',
  ),
  442 => 
  array (
    0 => 'andUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_description:a url_description:b',
  ),
  443 => 
  array (
    0 => 'andNotUrlDescription',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_description:a -url_description:b',
  ),
  444 => 
  array (
    0 => 'urlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_contains:a',
  ),
  445 => 
  array (
    0 => 'notUrlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_contains:a',
  ),
  446 => 
  array (
    0 => 'orUrlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR url_contains:a',
  ),
  447 => 
  array (
    0 => 'orNotUrlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -url_contains:a',
  ),
  448 => 
  array (
    0 => 'andUrlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url_contains:a',
  ),
  449 => 
  array (
    0 => 'andNotUrlContains',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url_contains:a',
  ),
  450 => 
  array (
    0 => 'urlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_contains:b',
  ),
  451 => 
  array (
    0 => 'notUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_contains:b',
  ),
  452 => 
  array (
    0 => 'orUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR url_contains:b',
  ),
  453 => 
  array (
    0 => 'orNotUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -url_contains:b',
  ),
  454 => 
  array (
    0 => 'andUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'url_contains:b',
  ),
  455 => 
  array (
    0 => 'andNotUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url_contains:b',
  ),
  456 => 
  array (
    0 => 'urlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_contains:a url_contains:b',
  ),
  457 => 
  array (
    0 => 'notUrlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_contains:a -url_contains:b',
  ),
  458 => 
  array (
    0 => 'orUrlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_contains:a OR url_contains:b',
  ),
  459 => 
  array (
    0 => 'orNotUrlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_contains:a OR -url_contains:b',
  ),
  460 => 
  array (
    0 => 'andUrlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url_contains:a url_contains:b',
  ),
  461 => 
  array (
    0 => 'andNotUrlContains',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url_contains:a -url_contains:b',
  ),
  462 => 
  array (
    0 => 'urlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_contains:a url_contains:b',
  ),
  463 => 
  array (
    0 => 'notUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_contains:a -url_contains:b',
  ),
  464 => 
  array (
    0 => 'orUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_contains:a OR url_contains:b',
  ),
  465 => 
  array (
    0 => 'orNotUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_contains:a OR -url_contains:b',
  ),
  466 => 
  array (
    0 => 'andUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'url_contains:a url_contains:b',
  ),
  467 => 
  array (
    0 => 'andNotUrlContains',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-url_contains:a -url_contains:b',
  ),
  468 => 
  array (
    0 => 'source',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'source:a',
  ),
  469 => 
  array (
    0 => 'notSource',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-source:a',
  ),
  470 => 
  array (
    0 => 'orSource',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR source:a',
  ),
  471 => 
  array (
    0 => 'orNotSource',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -source:a',
  ),
  472 => 
  array (
    0 => 'andSource',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'source:a',
  ),
  473 => 
  array (
    0 => 'andNotSource',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-source:a',
  ),
  474 => 
  array (
    0 => 'source',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'source:b',
  ),
  475 => 
  array (
    0 => 'notSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-source:b',
  ),
  476 => 
  array (
    0 => 'orSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR source:b',
  ),
  477 => 
  array (
    0 => 'orNotSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -source:b',
  ),
  478 => 
  array (
    0 => 'andSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'source:b',
  ),
  479 => 
  array (
    0 => 'andNotSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-source:b',
  ),
  480 => 
  array (
    0 => 'source',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'source:a source:b',
  ),
  481 => 
  array (
    0 => 'notSource',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-source:a -source:b',
  ),
  482 => 
  array (
    0 => 'orSource',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'source:a OR source:b',
  ),
  483 => 
  array (
    0 => 'orNotSource',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-source:a OR -source:b',
  ),
  484 => 
  array (
    0 => 'andSource',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'source:a source:b',
  ),
  485 => 
  array (
    0 => 'andNotSource',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-source:a -source:b',
  ),
  486 => 
  array (
    0 => 'source',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'source:a source:b',
  ),
  487 => 
  array (
    0 => 'notSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-source:a -source:b',
  ),
  488 => 
  array (
    0 => 'orSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'source:a OR source:b',
  ),
  489 => 
  array (
    0 => 'orNotSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-source:a OR -source:b',
  ),
  490 => 
  array (
    0 => 'andSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'source:a source:b',
  ),
  491 => 
  array (
    0 => 'andNotSource',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-source:a -source:b',
  ),
  492 => 
  array (
    0 => 'inReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'in_reply_to_tweet_id:a',
  ),
  493 => 
  array (
    0 => 'notInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-in_reply_to_tweet_id:a',
  ),
  494 => 
  array (
    0 => 'orInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR in_reply_to_tweet_id:a',
  ),
  495 => 
  array (
    0 => 'orNotInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -in_reply_to_tweet_id:a',
  ),
  496 => 
  array (
    0 => 'andInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'in_reply_to_tweet_id:a',
  ),
  497 => 
  array (
    0 => 'andNotInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-in_reply_to_tweet_id:a',
  ),
  498 => 
  array (
    0 => 'inReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'in_reply_to_tweet_id:b',
  ),
  499 => 
  array (
    0 => 'notInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-in_reply_to_tweet_id:b',
  ),
  500 => 
  array (
    0 => 'orInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR in_reply_to_tweet_id:b',
  ),
  501 => 
  array (
    0 => 'orNotInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -in_reply_to_tweet_id:b',
  ),
  502 => 
  array (
    0 => 'andInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'in_reply_to_tweet_id:b',
  ),
  503 => 
  array (
    0 => 'andNotInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-in_reply_to_tweet_id:b',
  ),
  504 => 
  array (
    0 => 'inReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'in_reply_to_tweet_id:a in_reply_to_tweet_id:b',
  ),
  505 => 
  array (
    0 => 'notInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-in_reply_to_tweet_id:a -in_reply_to_tweet_id:b',
  ),
  506 => 
  array (
    0 => 'orInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'in_reply_to_tweet_id:a OR in_reply_to_tweet_id:b',
  ),
  507 => 
  array (
    0 => 'orNotInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-in_reply_to_tweet_id:a OR -in_reply_to_tweet_id:b',
  ),
  508 => 
  array (
    0 => 'andInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'in_reply_to_tweet_id:a in_reply_to_tweet_id:b',
  ),
  509 => 
  array (
    0 => 'andNotInReplyToTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-in_reply_to_tweet_id:a -in_reply_to_tweet_id:b',
  ),
  510 => 
  array (
    0 => 'inReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'in_reply_to_tweet_id:a in_reply_to_tweet_id:b',
  ),
  511 => 
  array (
    0 => 'notInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-in_reply_to_tweet_id:a -in_reply_to_tweet_id:b',
  ),
  512 => 
  array (
    0 => 'orInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'in_reply_to_tweet_id:a OR in_reply_to_tweet_id:b',
  ),
  513 => 
  array (
    0 => 'orNotInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-in_reply_to_tweet_id:a OR -in_reply_to_tweet_id:b',
  ),
  514 => 
  array (
    0 => 'andInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'in_reply_to_tweet_id:a in_reply_to_tweet_id:b',
  ),
  515 => 
  array (
    0 => 'andNotInReplyToTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-in_reply_to_tweet_id:a -in_reply_to_tweet_id:b',
  ),
  516 => 
  array (
    0 => 'retweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of_tweet_id:a',
  ),
  517 => 
  array (
    0 => 'notRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of_tweet_id:a',
  ),
  518 => 
  array (
    0 => 'orRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR retweets_of_tweet_id:a',
  ),
  519 => 
  array (
    0 => 'orNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'OR -retweets_of_tweet_id:a',
  ),
  520 => 
  array (
    0 => 'andRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of_tweet_id:a',
  ),
  521 => 
  array (
    0 => 'andNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of_tweet_id:a',
  ),
  522 => 
  array (
    0 => 'retweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'retweets_of_tweet_id:b',
  ),
  523 => 
  array (
    0 => 'notRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-retweets_of_tweet_id:b',
  ),
  524 => 
  array (
    0 => 'orRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR retweets_of_tweet_id:b',
  ),
  525 => 
  array (
    0 => 'orNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'OR -retweets_of_tweet_id:b',
  ),
  526 => 
  array (
    0 => 'andRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'retweets_of_tweet_id:b',
  ),
  527 => 
  array (
    0 => 'andNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-retweets_of_tweet_id:b',
  ),
  528 => 
  array (
    0 => 'retweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of_tweet_id:a retweets_of_tweet_id:b',
  ),
  529 => 
  array (
    0 => 'notRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of_tweet_id:a -retweets_of_tweet_id:b',
  ),
  530 => 
  array (
    0 => 'orRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of_tweet_id:a OR retweets_of_tweet_id:b',
  ),
  531 => 
  array (
    0 => 'orNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of_tweet_id:a OR -retweets_of_tweet_id:b',
  ),
  532 => 
  array (
    0 => 'andRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of_tweet_id:a retweets_of_tweet_id:b',
  ),
  533 => 
  array (
    0 => 'andNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of_tweet_id:a -retweets_of_tweet_id:b',
  ),
  534 => 
  array (
    0 => 'retweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of_tweet_id:a retweets_of_tweet_id:b',
  ),
  535 => 
  array (
    0 => 'notRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of_tweet_id:a -retweets_of_tweet_id:b',
  ),
  536 => 
  array (
    0 => 'orRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of_tweet_id:a OR retweets_of_tweet_id:b',
  ),
  537 => 
  array (
    0 => 'orNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of_tweet_id:a OR -retweets_of_tweet_id:b',
  ),
  538 => 
  array (
    0 => 'andRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => 'retweets_of_tweet_id:a retweets_of_tweet_id:b',
  ),
  539 => 
  array (
    0 => 'andNotRetweetsOfTweetId',
    1 => 
    array (
      0 => 
      array (
        0 => 'a',
        1 => 'b',
      ),
    ),
    2 => '-retweets_of_tweet_id:a -retweets_of_tweet_id:b',
  ),
  540 => 
  array (
    0 => 'withFollowersCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'followers_count:1',
  ),
  541 => 
  array (
    0 => 'notWithFollowersCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => '-followers_count:1',
  ),
  542 => 
  array (
    0 => 'orWithFollowersCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'OR followers_count:1',
  ),
  543 => 
  array (
    0 => 'andWithFollowersCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'followers_count:1',
  ),
  544 => 
  array (
    0 => 'withFollowersCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'followers_count:1..2',
  ),
  545 => 
  array (
    0 => 'notWithFollowersCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => '-followers_count:1..2',
  ),
  546 => 
  array (
    0 => 'orWithFollowersCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'OR followers_count:1..2',
  ),
  547 => 
  array (
    0 => 'andWithFollowersCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'followers_count:1..2',
  ),
  548 => 
  array (
    0 => 'withTweetsCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'tweets_count:1',
  ),
  549 => 
  array (
    0 => 'notWithTweetsCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => '-tweets_count:1',
  ),
  550 => 
  array (
    0 => 'orWithTweetsCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'OR tweets_count:1',
  ),
  551 => 
  array (
    0 => 'andWithTweetsCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'tweets_count:1',
  ),
  552 => 
  array (
    0 => 'withTweetsCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'tweets_count:1..2',
  ),
  553 => 
  array (
    0 => 'notWithTweetsCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => '-tweets_count:1..2',
  ),
  554 => 
  array (
    0 => 'orWithTweetsCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'OR tweets_count:1..2',
  ),
  555 => 
  array (
    0 => 'andWithTweetsCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'tweets_count:1..2',
  ),
  556 => 
  array (
    0 => 'withFollowingCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'following_count:1',
  ),
  557 => 
  array (
    0 => 'notWithFollowingCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => '-following_count:1',
  ),
  558 => 
  array (
    0 => 'orWithFollowingCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'OR following_count:1',
  ),
  559 => 
  array (
    0 => 'andWithFollowingCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'following_count:1',
  ),
  560 => 
  array (
    0 => 'withFollowingCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'following_count:1..2',
  ),
  561 => 
  array (
    0 => 'notWithFollowingCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => '-following_count:1..2',
  ),
  562 => 
  array (
    0 => 'orWithFollowingCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'OR following_count:1..2',
  ),
  563 => 
  array (
    0 => 'andWithFollowingCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'following_count:1..2',
  ),
  564 => 
  array (
    0 => 'withListedCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'listed_count:1',
  ),
  565 => 
  array (
    0 => 'notWithListedCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => '-listed_count:1',
  ),
  566 => 
  array (
    0 => 'orWithListedCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'OR listed_count:1',
  ),
  567 => 
  array (
    0 => 'andWithListedCount',
    1 => 
    array (
      0 => 1,
    ),
    2 => 'listed_count:1',
  ),
  568 => 
  array (
    0 => 'withListedCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'listed_count:1..2',
  ),
  569 => 
  array (
    0 => 'notWithListedCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => '-listed_count:1..2',
  ),
  570 => 
  array (
    0 => 'orWithListedCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'OR listed_count:1..2',
  ),
  571 => 
  array (
    0 => 'andWithListedCount',
    1 => 
    array (
      0 => 1,
      1 => 2,
    ),
    2 => 'listed_count:1..2',
  ),
));
