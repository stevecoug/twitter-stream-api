<?php

use RWC\TwitterStream\RuleBuilder;

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
    0 => 'orIsRetweet',
    1 => 
    array (
    ),
    2 => 'or is:retweet',
  ),
  3 => 
  array (
    0 => 'orIsNotRetweet',
    1 => 
    array (
    ),
    2 => 'or -is:retweet',
  ),
  4 => 
  array (
    0 => 'andIsRetweet',
    1 => 
    array (
    ),
    2 => 'and is:retweet',
  ),
  5 => 
  array (
    0 => 'andIsNotRetweet',
    1 => 
    array (
    ),
    2 => 'and -is:retweet',
  ),
  6 => 
  array (
    0 => 'isReply',
    1 => 
    array (
    ),
    2 => 'is:reply',
  ),
  7 => 
  array (
    0 => 'isNotReply',
    1 => 
    array (
    ),
    2 => '-is:reply',
  ),
  8 => 
  array (
    0 => 'orIsReply',
    1 => 
    array (
    ),
    2 => 'or is:reply',
  ),
  9 => 
  array (
    0 => 'orIsNotReply',
    1 => 
    array (
    ),
    2 => 'or -is:reply',
  ),
  10 => 
  array (
    0 => 'andIsReply',
    1 => 
    array (
    ),
    2 => 'and is:reply',
  ),
  11 => 
  array (
    0 => 'andIsNotReply',
    1 => 
    array (
    ),
    2 => 'and -is:reply',
  ),
  12 => 
  array (
    0 => 'isQuote',
    1 => 
    array (
    ),
    2 => 'is:quote',
  ),
  13 => 
  array (
    0 => 'isNotQuote',
    1 => 
    array (
    ),
    2 => '-is:quote',
  ),
  14 => 
  array (
    0 => 'orIsQuote',
    1 => 
    array (
    ),
    2 => 'or is:quote',
  ),
  15 => 
  array (
    0 => 'orIsNotQuote',
    1 => 
    array (
    ),
    2 => 'or -is:quote',
  ),
  16 => 
  array (
    0 => 'andIsQuote',
    1 => 
    array (
    ),
    2 => 'and is:quote',
  ),
  17 => 
  array (
    0 => 'andIsNotQuote',
    1 => 
    array (
    ),
    2 => 'and -is:quote',
  ),
  18 => 
  array (
    0 => 'isVerified',
    1 => 
    array (
    ),
    2 => 'is:verified',
  ),
  19 => 
  array (
    0 => 'isNotVerified',
    1 => 
    array (
    ),
    2 => '-is:verified',
  ),
  20 => 
  array (
    0 => 'orIsVerified',
    1 => 
    array (
    ),
    2 => 'or is:verified',
  ),
  21 => 
  array (
    0 => 'orIsNotVerified',
    1 => 
    array (
    ),
    2 => 'or -is:verified',
  ),
  22 => 
  array (
    0 => 'andIsVerified',
    1 => 
    array (
    ),
    2 => 'and is:verified',
  ),
  23 => 
  array (
    0 => 'andIsNotVerified',
    1 => 
    array (
    ),
    2 => 'and -is:verified',
  ),
  24 => 
  array (
    0 => 'hasHashtags',
    1 => 
    array (
    ),
    2 => 'has:hashtags',
  ),
  25 => 
  array (
    0 => 'hasNotHashtags',
    1 => 
    array (
    ),
    2 => '-has:hashtags',
  ),
  26 => 
  array (
    0 => 'orHasHashtags',
    1 => 
    array (
    ),
    2 => 'or has:hashtags',
  ),
  27 => 
  array (
    0 => 'orHasNotHashtags',
    1 => 
    array (
    ),
    2 => 'or -has:hashtags',
  ),
  28 => 
  array (
    0 => 'andHasHashtags',
    1 => 
    array (
    ),
    2 => 'and has:hashtags',
  ),
  29 => 
  array (
    0 => 'andHasNotHashtags',
    1 => 
    array (
    ),
    2 => 'and -has:hashtags',
  ),
  30 => 
  array (
    0 => 'hasCashtags',
    1 => 
    array (
    ),
    2 => 'has:cashtags',
  ),
  31 => 
  array (
    0 => 'hasNotCashtags',
    1 => 
    array (
    ),
    2 => '-has:cashtags',
  ),
  32 => 
  array (
    0 => 'orHasCashtags',
    1 => 
    array (
    ),
    2 => 'or has:cashtags',
  ),
  33 => 
  array (
    0 => 'orHasNotCashtags',
    1 => 
    array (
    ),
    2 => 'or -has:cashtags',
  ),
  34 => 
  array (
    0 => 'andHasCashtags',
    1 => 
    array (
    ),
    2 => 'and has:cashtags',
  ),
  35 => 
  array (
    0 => 'andHasNotCashtags',
    1 => 
    array (
    ),
    2 => 'and -has:cashtags',
  ),
  36 => 
  array (
    0 => 'hasLinks',
    1 => 
    array (
    ),
    2 => 'has:links',
  ),
  37 => 
  array (
    0 => 'hasNotLinks',
    1 => 
    array (
    ),
    2 => '-has:links',
  ),
  38 => 
  array (
    0 => 'orHasLinks',
    1 => 
    array (
    ),
    2 => 'or has:links',
  ),
  39 => 
  array (
    0 => 'orHasNotLinks',
    1 => 
    array (
    ),
    2 => 'or -has:links',
  ),
  40 => 
  array (
    0 => 'andHasLinks',
    1 => 
    array (
    ),
    2 => 'and has:links',
  ),
  41 => 
  array (
    0 => 'andHasNotLinks',
    1 => 
    array (
    ),
    2 => 'and -has:links',
  ),
  42 => 
  array (
    0 => 'hasMentions',
    1 => 
    array (
    ),
    2 => 'has:mentions',
  ),
  43 => 
  array (
    0 => 'hasNotMentions',
    1 => 
    array (
    ),
    2 => '-has:mentions',
  ),
  44 => 
  array (
    0 => 'orHasMentions',
    1 => 
    array (
    ),
    2 => 'or has:mentions',
  ),
  45 => 
  array (
    0 => 'orHasNotMentions',
    1 => 
    array (
    ),
    2 => 'or -has:mentions',
  ),
  46 => 
  array (
    0 => 'andHasMentions',
    1 => 
    array (
    ),
    2 => 'and has:mentions',
  ),
  47 => 
  array (
    0 => 'andHasNotMentions',
    1 => 
    array (
    ),
    2 => 'and -has:mentions',
  ),
  48 => 
  array (
    0 => 'hasMedia',
    1 => 
    array (
    ),
    2 => 'has:media',
  ),
  49 => 
  array (
    0 => 'hasNotMedia',
    1 => 
    array (
    ),
    2 => '-has:media',
  ),
  50 => 
  array (
    0 => 'orHasMedia',
    1 => 
    array (
    ),
    2 => 'or has:media',
  ),
  51 => 
  array (
    0 => 'orHasNotMedia',
    1 => 
    array (
    ),
    2 => 'or -has:media',
  ),
  52 => 
  array (
    0 => 'andHasMedia',
    1 => 
    array (
    ),
    2 => 'and has:media',
  ),
  53 => 
  array (
    0 => 'andHasNotMedia',
    1 => 
    array (
    ),
    2 => 'and -has:media',
  ),
  54 => 
  array (
    0 => 'hasVideos',
    1 => 
    array (
    ),
    2 => 'has:videos',
  ),
  55 => 
  array (
    0 => 'hasNotVideos',
    1 => 
    array (
    ),
    2 => '-has:videos',
  ),
  56 => 
  array (
    0 => 'orHasVideos',
    1 => 
    array (
    ),
    2 => 'or has:videos',
  ),
  57 => 
  array (
    0 => 'orHasNotVideos',
    1 => 
    array (
    ),
    2 => 'or -has:videos',
  ),
  58 => 
  array (
    0 => 'andHasVideos',
    1 => 
    array (
    ),
    2 => 'and has:videos',
  ),
  59 => 
  array (
    0 => 'andHasNotVideos',
    1 => 
    array (
    ),
    2 => 'and -has:videos',
  ),
  60 => 
  array (
    0 => 'hasGeo',
    1 => 
    array (
    ),
    2 => 'has:geo',
  ),
  61 => 
  array (
    0 => 'hasNotGeo',
    1 => 
    array (
    ),
    2 => '-has:geo',
  ),
  62 => 
  array (
    0 => 'orHasGeo',
    1 => 
    array (
    ),
    2 => 'or has:geo',
  ),
  63 => 
  array (
    0 => 'orHasNotGeo',
    1 => 
    array (
    ),
    2 => 'or -has:geo',
  ),
  64 => 
  array (
    0 => 'andHasGeo',
    1 => 
    array (
    ),
    2 => 'and has:geo',
  ),
  65 => 
  array (
    0 => 'andHasNotGeo',
    1 => 
    array (
    ),
    2 => 'and -has:geo',
  ),
  66 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'from:a',
  ),
  67 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-from:a',
  ),
  68 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or from:a',
  ),
  69 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -from:a',
  ),
  70 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and from:a',
  ),
  71 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -from:a',
  ),
  72 => 
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
  73 => 
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
  74 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or from:b',
  ),
  75 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -from:b',
  ),
  76 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and from:b',
  ),
  77 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -from:b',
  ),
  78 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a from:b',
  ),
  79 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a -from:b',
  ),
  80 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a or from:b',
  ),
  81 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a or -from:b',
  ),
  82 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a and from:b',
  ),
  83 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a and -from:b',
  ),
  84 => 
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
  85 => 
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
  86 => 
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
    2 => 'from:a or from:b',
  ),
  87 => 
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
    2 => '-from:a or -from:b',
  ),
  88 => 
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
    2 => 'from:a and from:b',
  ),
  89 => 
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
    2 => '-from:a and -from:b',
  ),
  90 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'to:a',
  ),
  91 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-to:a',
  ),
  92 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or to:a',
  ),
  93 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -to:a',
  ),
  94 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and to:a',
  ),
  95 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -to:a',
  ),
  96 => 
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
  97 => 
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
  98 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or to:b',
  ),
  99 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -to:b',
  ),
  100 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and to:b',
  ),
  101 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -to:b',
  ),
  102 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a to:b',
  ),
  103 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a -to:b',
  ),
  104 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a or to:b',
  ),
  105 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a or -to:b',
  ),
  106 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a and to:b',
  ),
  107 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a and -to:b',
  ),
  108 => 
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
  109 => 
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
  110 => 
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
    2 => 'to:a or to:b',
  ),
  111 => 
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
    2 => '-to:a or -to:b',
  ),
  112 => 
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
    2 => 'to:a and to:b',
  ),
  113 => 
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
    2 => '-to:a and -to:b',
  ),
  114 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url:a',
  ),
  115 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url:a',
  ),
  116 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or url:a',
  ),
  117 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -url:a',
  ),
  118 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and url:a',
  ),
  119 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -url:a',
  ),
  120 => 
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
  121 => 
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
  122 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or url:b',
  ),
  123 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -url:b',
  ),
  124 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and url:b',
  ),
  125 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -url:b',
  ),
  126 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a url:b',
  ),
  127 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a -url:b',
  ),
  128 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a or url:b',
  ),
  129 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a or -url:b',
  ),
  130 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a and url:b',
  ),
  131 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a and -url:b',
  ),
  132 => 
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
  133 => 
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
  134 => 
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
    2 => 'url:a or url:b',
  ),
  135 => 
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
    2 => '-url:a or -url:b',
  ),
  136 => 
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
    2 => 'url:a and url:b',
  ),
  137 => 
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
    2 => '-url:a and -url:b',
  ),
  138 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of:a',
  ),
  139 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of:a',
  ),
  140 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or retweets_of:a',
  ),
  141 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -retweets_of:a',
  ),
  142 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and retweets_of:a',
  ),
  143 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -retweets_of:a',
  ),
  144 => 
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
  145 => 
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
  146 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or retweets_of:b',
  ),
  147 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -retweets_of:b',
  ),
  148 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and retweets_of:b',
  ),
  149 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -retweets_of:b',
  ),
  150 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  151 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  152 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a or retweets_of:b',
  ),
  153 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a or -retweets_of:b',
  ),
  154 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a and retweets_of:b',
  ),
  155 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a and -retweets_of:b',
  ),
  156 => 
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
  157 => 
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
  158 => 
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
    2 => 'retweets_of:a or retweets_of:b',
  ),
  159 => 
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
    2 => '-retweets_of:a or -retweets_of:b',
  ),
  160 => 
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
    2 => 'retweets_of:a and retweets_of:b',
  ),
  161 => 
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
    2 => '-retweets_of:a and -retweets_of:b',
  ),
  162 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'context:a',
  ),
  163 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-context:a',
  ),
  164 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or context:a',
  ),
  165 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -context:a',
  ),
  166 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and context:a',
  ),
  167 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -context:a',
  ),
  168 => 
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
  169 => 
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
  170 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or context:b',
  ),
  171 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -context:b',
  ),
  172 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and context:b',
  ),
  173 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -context:b',
  ),
  174 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a context:b',
  ),
  175 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a -context:b',
  ),
  176 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a or context:b',
  ),
  177 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a or -context:b',
  ),
  178 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a and context:b',
  ),
  179 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a and -context:b',
  ),
  180 => 
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
  181 => 
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
  182 => 
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
    2 => 'context:a or context:b',
  ),
  183 => 
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
    2 => '-context:a or -context:b',
  ),
  184 => 
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
    2 => 'context:a and context:b',
  ),
  185 => 
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
    2 => '-context:a and -context:b',
  ),
  186 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'entity:a',
  ),
  187 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-entity:a',
  ),
  188 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or entity:a',
  ),
  189 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -entity:a',
  ),
  190 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and entity:a',
  ),
  191 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -entity:a',
  ),
  192 => 
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
  193 => 
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
  194 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or entity:b',
  ),
  195 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -entity:b',
  ),
  196 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and entity:b',
  ),
  197 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -entity:b',
  ),
  198 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a entity:b',
  ),
  199 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a -entity:b',
  ),
  200 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a or entity:b',
  ),
  201 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a or -entity:b',
  ),
  202 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a and entity:b',
  ),
  203 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a and -entity:b',
  ),
  204 => 
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
  205 => 
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
  206 => 
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
    2 => 'entity:a or entity:b',
  ),
  207 => 
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
    2 => '-entity:a or -entity:b',
  ),
  208 => 
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
    2 => 'entity:a and entity:b',
  ),
  209 => 
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
    2 => '-entity:a and -entity:b',
  ),
  210 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'conversation_id:a',
  ),
  211 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-conversation_id:a',
  ),
  212 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or conversation_id:a',
  ),
  213 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -conversation_id:a',
  ),
  214 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and conversation_id:a',
  ),
  215 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -conversation_id:a',
  ),
  216 => 
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
  217 => 
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
  218 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or conversation_id:b',
  ),
  219 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -conversation_id:b',
  ),
  220 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and conversation_id:b',
  ),
  221 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -conversation_id:b',
  ),
  222 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  223 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  224 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a or conversation_id:b',
  ),
  225 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a or -conversation_id:b',
  ),
  226 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a and conversation_id:b',
  ),
  227 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a and -conversation_id:b',
  ),
  228 => 
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
  229 => 
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
  230 => 
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
    2 => 'conversation_id:a or conversation_id:b',
  ),
  231 => 
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
    2 => '-conversation_id:a or -conversation_id:b',
  ),
  232 => 
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
    2 => 'conversation_id:a and conversation_id:b',
  ),
  233 => 
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
    2 => '-conversation_id:a and -conversation_id:b',
  ),
  234 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio:a',
  ),
  235 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio:a',
  ),
  236 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio:a',
  ),
  237 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio:a',
  ),
  238 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio:a',
  ),
  239 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio:a',
  ),
  240 => 
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
  241 => 
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
  242 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or bio:b',
  ),
  243 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio:b',
  ),
  244 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and bio:b',
  ),
  245 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio:b',
  ),
  246 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a bio:b',
  ),
  247 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a -bio:b',
  ),
  248 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a or bio:b',
  ),
  249 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a or -bio:b',
  ),
  250 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a and bio:b',
  ),
  251 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a and -bio:b',
  ),
  252 => 
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
  253 => 
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
  254 => 
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
    2 => 'bio:a or bio:b',
  ),
  255 => 
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
    2 => '-bio:a or -bio:b',
  ),
  256 => 
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
    2 => 'bio:a and bio:b',
  ),
  257 => 
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
    2 => '-bio:a and -bio:b',
  ),
  258 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_name:a',
  ),
  259 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_name:a',
  ),
  260 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio_name:a',
  ),
  261 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_name:a',
  ),
  262 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio_name:a',
  ),
  263 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_name:a',
  ),
  264 => 
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
  265 => 
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
  266 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or bio_name:b',
  ),
  267 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio_name:b',
  ),
  268 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and bio_name:b',
  ),
  269 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio_name:b',
  ),
  270 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  271 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  272 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a or bio_name:b',
  ),
  273 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a or -bio_name:b',
  ),
  274 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a and bio_name:b',
  ),
  275 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a and -bio_name:b',
  ),
  276 => 
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
  277 => 
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
  278 => 
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
    2 => 'bio_name:a or bio_name:b',
  ),
  279 => 
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
    2 => '-bio_name:a or -bio_name:b',
  ),
  280 => 
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
    2 => 'bio_name:a and bio_name:b',
  ),
  281 => 
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
    2 => '-bio_name:a and -bio_name:b',
  ),
  282 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_location:a',
  ),
  283 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_location:a',
  ),
  284 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio_location:a',
  ),
  285 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_location:a',
  ),
  286 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio_location:a',
  ),
  287 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_location:a',
  ),
  288 => 
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
  289 => 
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
  290 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or bio_location:b',
  ),
  291 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio_location:b',
  ),
  292 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and bio_location:b',
  ),
  293 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio_location:b',
  ),
  294 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  295 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  296 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a or bio_location:b',
  ),
  297 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a or -bio_location:b',
  ),
  298 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a and bio_location:b',
  ),
  299 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a and -bio_location:b',
  ),
  300 => 
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
  301 => 
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
  302 => 
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
    2 => 'bio_location:a or bio_location:b',
  ),
  303 => 
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
    2 => '-bio_location:a or -bio_location:b',
  ),
  304 => 
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
    2 => 'bio_location:a and bio_location:b',
  ),
  305 => 
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
    2 => '-bio_location:a and -bio_location:b',
  ),
  306 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place:a',
  ),
  307 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place:a',
  ),
  308 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or place:a',
  ),
  309 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place:a',
  ),
  310 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and place:a',
  ),
  311 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place:a',
  ),
  312 => 
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
  313 => 
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
  314 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or place:b',
  ),
  315 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -place:b',
  ),
  316 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and place:b',
  ),
  317 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -place:b',
  ),
  318 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a place:b',
  ),
  319 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a -place:b',
  ),
  320 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a or place:b',
  ),
  321 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a or -place:b',
  ),
  322 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a and place:b',
  ),
  323 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a and -place:b',
  ),
  324 => 
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
  325 => 
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
  326 => 
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
    2 => 'place:a or place:b',
  ),
  327 => 
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
    2 => '-place:a or -place:b',
  ),
  328 => 
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
    2 => 'place:a and place:b',
  ),
  329 => 
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
    2 => '-place:a and -place:b',
  ),
  330 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place_country:a',
  ),
  331 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place_country:a',
  ),
  332 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or place_country:a',
  ),
  333 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place_country:a',
  ),
  334 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and place_country:a',
  ),
  335 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place_country:a',
  ),
  336 => 
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
  337 => 
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
  338 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or place_country:b',
  ),
  339 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -place_country:b',
  ),
  340 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and place_country:b',
  ),
  341 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -place_country:b',
  ),
  342 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a place_country:b',
  ),
  343 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a -place_country:b',
  ),
  344 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a or place_country:b',
  ),
  345 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a or -place_country:b',
  ),
  346 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a and place_country:b',
  ),
  347 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a and -place_country:b',
  ),
  348 => 
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
  349 => 
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
  350 => 
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
    2 => 'place_country:a or place_country:b',
  ),
  351 => 
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
    2 => '-place_country:a or -place_country:b',
  ),
  352 => 
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
    2 => 'place_country:a and place_country:b',
  ),
  353 => 
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
    2 => '-place_country:a and -place_country:b',
  ),
  354 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'lang:a',
  ),
  355 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-lang:a',
  ),
  356 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or lang:a',
  ),
  357 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -lang:a',
  ),
  358 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and lang:a',
  ),
  359 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -lang:a',
  ),
  360 => 
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
  361 => 
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
  362 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or lang:b',
  ),
  363 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -lang:b',
  ),
  364 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and lang:b',
  ),
  365 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -lang:b',
  ),
  366 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a lang:b',
  ),
  367 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a -lang:b',
  ),
  368 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a or lang:b',
  ),
  369 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a or -lang:b',
  ),
  370 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a and lang:b',
  ),
  371 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a and -lang:b',
  ),
  372 => 
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
  373 => 
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
  374 => 
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
    2 => 'lang:a or lang:b',
  ),
  375 => 
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
    2 => '-lang:a or -lang:b',
  ),
  376 => 
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
    2 => 'lang:a and lang:b',
  ),
  377 => 
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
    2 => '-lang:a and -lang:b',
  ),
));
