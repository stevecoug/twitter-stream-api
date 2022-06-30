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
    2 => 'or is:retweet',
  ),
  4 => 
  array (
    0 => 'orIsNotRetweet',
    1 => 
    array (
    ),
    2 => 'or -is:retweet',
  ),
  5 => 
  array (
    0 => 'andIsRetweet',
    1 => 
    array (
    ),
    2 => 'and is:retweet',
  ),
  6 => 
  array (
    0 => 'andIsNotRetweet',
    1 => 
    array (
    ),
    2 => 'and -is:retweet',
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
    2 => 'or is:reply',
  ),
  11 => 
  array (
    0 => 'orIsNotReply',
    1 => 
    array (
    ),
    2 => 'or -is:reply',
  ),
  12 => 
  array (
    0 => 'andIsReply',
    1 => 
    array (
    ),
    2 => 'and is:reply',
  ),
  13 => 
  array (
    0 => 'andIsNotReply',
    1 => 
    array (
    ),
    2 => 'and -is:reply',
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
    2 => 'or is:quote',
  ),
  18 => 
  array (
    0 => 'orIsNotQuote',
    1 => 
    array (
    ),
    2 => 'or -is:quote',
  ),
  19 => 
  array (
    0 => 'andIsQuote',
    1 => 
    array (
    ),
    2 => 'and is:quote',
  ),
  20 => 
  array (
    0 => 'andIsNotQuote',
    1 => 
    array (
    ),
    2 => 'and -is:quote',
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
    2 => 'or is:verified',
  ),
  25 => 
  array (
    0 => 'orIsNotVerified',
    1 => 
    array (
    ),
    2 => 'or -is:verified',
  ),
  26 => 
  array (
    0 => 'andIsVerified',
    1 => 
    array (
    ),
    2 => 'and is:verified',
  ),
  27 => 
  array (
    0 => 'andIsNotVerified',
    1 => 
    array (
    ),
    2 => 'and -is:verified',
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
    2 => 'or has:hashtags',
  ),
  32 => 
  array (
    0 => 'orHasNotHashtags',
    1 => 
    array (
    ),
    2 => 'or -has:hashtags',
  ),
  33 => 
  array (
    0 => 'andHasHashtags',
    1 => 
    array (
    ),
    2 => 'and has:hashtags',
  ),
  34 => 
  array (
    0 => 'andHasNotHashtags',
    1 => 
    array (
    ),
    2 => 'and -has:hashtags',
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
    2 => 'or has:cashtags',
  ),
  39 => 
  array (
    0 => 'orHasNotCashtags',
    1 => 
    array (
    ),
    2 => 'or -has:cashtags',
  ),
  40 => 
  array (
    0 => 'andHasCashtags',
    1 => 
    array (
    ),
    2 => 'and has:cashtags',
  ),
  41 => 
  array (
    0 => 'andHasNotCashtags',
    1 => 
    array (
    ),
    2 => 'and -has:cashtags',
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
    2 => 'or has:links',
  ),
  46 => 
  array (
    0 => 'orHasNotLinks',
    1 => 
    array (
    ),
    2 => 'or -has:links',
  ),
  47 => 
  array (
    0 => 'andHasLinks',
    1 => 
    array (
    ),
    2 => 'and has:links',
  ),
  48 => 
  array (
    0 => 'andHasNotLinks',
    1 => 
    array (
    ),
    2 => 'and -has:links',
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
    2 => 'or has:mentions',
  ),
  53 => 
  array (
    0 => 'orHasNotMentions',
    1 => 
    array (
    ),
    2 => 'or -has:mentions',
  ),
  54 => 
  array (
    0 => 'andHasMentions',
    1 => 
    array (
    ),
    2 => 'and has:mentions',
  ),
  55 => 
  array (
    0 => 'andHasNotMentions',
    1 => 
    array (
    ),
    2 => 'and -has:mentions',
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
    2 => 'or has:media',
  ),
  60 => 
  array (
    0 => 'orHasNotMedia',
    1 => 
    array (
    ),
    2 => 'or -has:media',
  ),
  61 => 
  array (
    0 => 'andHasMedia',
    1 => 
    array (
    ),
    2 => 'and has:media',
  ),
  62 => 
  array (
    0 => 'andHasNotMedia',
    1 => 
    array (
    ),
    2 => 'and -has:media',
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
    2 => 'or has:images',
  ),
  67 => 
  array (
    0 => 'orHasNotImages',
    1 => 
    array (
    ),
    2 => 'or -has:images',
  ),
  68 => 
  array (
    0 => 'andHasImages',
    1 => 
    array (
    ),
    2 => 'and has:images',
  ),
  69 => 
  array (
    0 => 'andHasNotImages',
    1 => 
    array (
    ),
    2 => 'and -has:images',
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
    2 => 'or has:videos',
  ),
  74 => 
  array (
    0 => 'orHasNotVideos',
    1 => 
    array (
    ),
    2 => 'or -has:videos',
  ),
  75 => 
  array (
    0 => 'andHasVideos',
    1 => 
    array (
    ),
    2 => 'and has:videos',
  ),
  76 => 
  array (
    0 => 'andHasNotVideos',
    1 => 
    array (
    ),
    2 => 'and -has:videos',
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
    2 => 'or has:geo',
  ),
  81 => 
  array (
    0 => 'orHasNotGeo',
    1 => 
    array (
    ),
    2 => 'or -has:geo',
  ),
  82 => 
  array (
    0 => 'andHasGeo',
    1 => 
    array (
    ),
    2 => 'and has:geo',
  ),
  83 => 
  array (
    0 => 'andHasNotGeo',
    1 => 
    array (
    ),
    2 => 'and -has:geo',
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
    0 => 'exceptFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-from:a',
  ),
  87 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or from:a',
  ),
  88 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -from:a',
  ),
  89 => 
  array (
    0 => 'orExceptFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -from:a',
  ),
  90 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and from:a',
  ),
  91 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -from:a',
  ),
  92 => 
  array (
    0 => 'andExceptFrom',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -from:a',
  ),
  93 => 
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
  94 => 
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
  95 => 
  array (
    0 => 'exceptFrom',
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
  97 => 
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
  98 => 
  array (
    0 => 'orExceptFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -from:b',
  ),
  99 => 
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
  100 => 
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
  101 => 
  array (
    0 => 'andExceptFrom',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -from:b',
  ),
  102 => 
  array (
    0 => 'from',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a from:b',
  ),
  103 => 
  array (
    0 => 'notFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a -from:b',
  ),
  104 => 
  array (
    0 => 'exceptFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a -from:b',
  ),
  105 => 
  array (
    0 => 'orFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a or from:b',
  ),
  106 => 
  array (
    0 => 'orNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a or -from:b',
  ),
  107 => 
  array (
    0 => 'orExceptFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a or -from:b',
  ),
  108 => 
  array (
    0 => 'andFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'from:a and from:b',
  ),
  109 => 
  array (
    0 => 'andNotFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a and -from:b',
  ),
  110 => 
  array (
    0 => 'andExceptFrom',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-from:a and -from:b',
  ),
  111 => 
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
  112 => 
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
  113 => 
  array (
    0 => 'exceptFrom',
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
  114 => 
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
  115 => 
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
  116 => 
  array (
    0 => 'orExceptFrom',
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
  117 => 
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
  118 => 
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
  119 => 
  array (
    0 => 'andExceptFrom',
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
  120 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'to:a',
  ),
  121 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-to:a',
  ),
  122 => 
  array (
    0 => 'exceptTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-to:a',
  ),
  123 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or to:a',
  ),
  124 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -to:a',
  ),
  125 => 
  array (
    0 => 'orExceptTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -to:a',
  ),
  126 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and to:a',
  ),
  127 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -to:a',
  ),
  128 => 
  array (
    0 => 'andExceptTo',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -to:a',
  ),
  129 => 
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
  130 => 
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
  131 => 
  array (
    0 => 'exceptTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-to:b',
  ),
  132 => 
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
  133 => 
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
  134 => 
  array (
    0 => 'orExceptTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -to:b',
  ),
  135 => 
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
  136 => 
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
  137 => 
  array (
    0 => 'andExceptTo',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -to:b',
  ),
  138 => 
  array (
    0 => 'to',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a to:b',
  ),
  139 => 
  array (
    0 => 'notTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a -to:b',
  ),
  140 => 
  array (
    0 => 'exceptTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a -to:b',
  ),
  141 => 
  array (
    0 => 'orTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a or to:b',
  ),
  142 => 
  array (
    0 => 'orNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a or -to:b',
  ),
  143 => 
  array (
    0 => 'orExceptTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a or -to:b',
  ),
  144 => 
  array (
    0 => 'andTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'to:a and to:b',
  ),
  145 => 
  array (
    0 => 'andNotTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a and -to:b',
  ),
  146 => 
  array (
    0 => 'andExceptTo',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-to:a and -to:b',
  ),
  147 => 
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
  148 => 
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
  149 => 
  array (
    0 => 'exceptTo',
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
  150 => 
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
  151 => 
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
  152 => 
  array (
    0 => 'orExceptTo',
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
  153 => 
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
  154 => 
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
  155 => 
  array (
    0 => 'andExceptTo',
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
  156 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'url:a',
  ),
  157 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url:a',
  ),
  158 => 
  array (
    0 => 'exceptUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-url:a',
  ),
  159 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or url:a',
  ),
  160 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -url:a',
  ),
  161 => 
  array (
    0 => 'orExceptUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -url:a',
  ),
  162 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and url:a',
  ),
  163 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -url:a',
  ),
  164 => 
  array (
    0 => 'andExceptUrl',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -url:a',
  ),
  165 => 
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
  166 => 
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
  167 => 
  array (
    0 => 'exceptUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-url:b',
  ),
  168 => 
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
  169 => 
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
  170 => 
  array (
    0 => 'orExceptUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -url:b',
  ),
  171 => 
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
  172 => 
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
  173 => 
  array (
    0 => 'andExceptUrl',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -url:b',
  ),
  174 => 
  array (
    0 => 'url',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a url:b',
  ),
  175 => 
  array (
    0 => 'notUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a -url:b',
  ),
  176 => 
  array (
    0 => 'exceptUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a -url:b',
  ),
  177 => 
  array (
    0 => 'orUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a or url:b',
  ),
  178 => 
  array (
    0 => 'orNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a or -url:b',
  ),
  179 => 
  array (
    0 => 'orExceptUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a or -url:b',
  ),
  180 => 
  array (
    0 => 'andUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'url:a and url:b',
  ),
  181 => 
  array (
    0 => 'andNotUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a and -url:b',
  ),
  182 => 
  array (
    0 => 'andExceptUrl',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-url:a and -url:b',
  ),
  183 => 
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
  184 => 
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
  185 => 
  array (
    0 => 'exceptUrl',
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
  186 => 
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
  187 => 
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
  188 => 
  array (
    0 => 'orExceptUrl',
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
  189 => 
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
  190 => 
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
  191 => 
  array (
    0 => 'andExceptUrl',
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
  192 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'retweets_of:a',
  ),
  193 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of:a',
  ),
  194 => 
  array (
    0 => 'exceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-retweets_of:a',
  ),
  195 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or retweets_of:a',
  ),
  196 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -retweets_of:a',
  ),
  197 => 
  array (
    0 => 'orExceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -retweets_of:a',
  ),
  198 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and retweets_of:a',
  ),
  199 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -retweets_of:a',
  ),
  200 => 
  array (
    0 => 'andExceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -retweets_of:a',
  ),
  201 => 
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
  202 => 
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
  203 => 
  array (
    0 => 'exceptRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-retweets_of:b',
  ),
  204 => 
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
  205 => 
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
  206 => 
  array (
    0 => 'orExceptRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -retweets_of:b',
  ),
  207 => 
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
  208 => 
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
  209 => 
  array (
    0 => 'andExceptRetweetsOf',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -retweets_of:b',
  ),
  210 => 
  array (
    0 => 'retweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a retweets_of:b',
  ),
  211 => 
  array (
    0 => 'notRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  212 => 
  array (
    0 => 'exceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a -retweets_of:b',
  ),
  213 => 
  array (
    0 => 'orRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a or retweets_of:b',
  ),
  214 => 
  array (
    0 => 'orNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a or -retweets_of:b',
  ),
  215 => 
  array (
    0 => 'orExceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a or -retweets_of:b',
  ),
  216 => 
  array (
    0 => 'andRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'retweets_of:a and retweets_of:b',
  ),
  217 => 
  array (
    0 => 'andNotRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a and -retweets_of:b',
  ),
  218 => 
  array (
    0 => 'andExceptRetweetsOf',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-retweets_of:a and -retweets_of:b',
  ),
  219 => 
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
  220 => 
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
  221 => 
  array (
    0 => 'exceptRetweetsOf',
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
  222 => 
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
  223 => 
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
  224 => 
  array (
    0 => 'orExceptRetweetsOf',
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
  225 => 
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
  226 => 
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
  227 => 
  array (
    0 => 'andExceptRetweetsOf',
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
  228 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'context:a',
  ),
  229 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-context:a',
  ),
  230 => 
  array (
    0 => 'exceptContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-context:a',
  ),
  231 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or context:a',
  ),
  232 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -context:a',
  ),
  233 => 
  array (
    0 => 'orExceptContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -context:a',
  ),
  234 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and context:a',
  ),
  235 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -context:a',
  ),
  236 => 
  array (
    0 => 'andExceptContext',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -context:a',
  ),
  237 => 
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
  238 => 
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
  239 => 
  array (
    0 => 'exceptContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-context:b',
  ),
  240 => 
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
  241 => 
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
  242 => 
  array (
    0 => 'orExceptContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -context:b',
  ),
  243 => 
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
  244 => 
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
  245 => 
  array (
    0 => 'andExceptContext',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -context:b',
  ),
  246 => 
  array (
    0 => 'context',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a context:b',
  ),
  247 => 
  array (
    0 => 'notContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a -context:b',
  ),
  248 => 
  array (
    0 => 'exceptContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a -context:b',
  ),
  249 => 
  array (
    0 => 'orContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a or context:b',
  ),
  250 => 
  array (
    0 => 'orNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a or -context:b',
  ),
  251 => 
  array (
    0 => 'orExceptContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a or -context:b',
  ),
  252 => 
  array (
    0 => 'andContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'context:a and context:b',
  ),
  253 => 
  array (
    0 => 'andNotContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a and -context:b',
  ),
  254 => 
  array (
    0 => 'andExceptContext',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-context:a and -context:b',
  ),
  255 => 
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
  256 => 
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
  257 => 
  array (
    0 => 'exceptContext',
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
  258 => 
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
  259 => 
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
  260 => 
  array (
    0 => 'orExceptContext',
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
  261 => 
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
  262 => 
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
  263 => 
  array (
    0 => 'andExceptContext',
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
  264 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'entity:a',
  ),
  265 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-entity:a',
  ),
  266 => 
  array (
    0 => 'exceptEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-entity:a',
  ),
  267 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or entity:a',
  ),
  268 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -entity:a',
  ),
  269 => 
  array (
    0 => 'orExceptEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -entity:a',
  ),
  270 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and entity:a',
  ),
  271 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -entity:a',
  ),
  272 => 
  array (
    0 => 'andExceptEntity',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -entity:a',
  ),
  273 => 
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
  274 => 
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
  275 => 
  array (
    0 => 'exceptEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-entity:b',
  ),
  276 => 
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
  277 => 
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
  278 => 
  array (
    0 => 'orExceptEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -entity:b',
  ),
  279 => 
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
  280 => 
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
  281 => 
  array (
    0 => 'andExceptEntity',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -entity:b',
  ),
  282 => 
  array (
    0 => 'entity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a entity:b',
  ),
  283 => 
  array (
    0 => 'notEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a -entity:b',
  ),
  284 => 
  array (
    0 => 'exceptEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a -entity:b',
  ),
  285 => 
  array (
    0 => 'orEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a or entity:b',
  ),
  286 => 
  array (
    0 => 'orNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a or -entity:b',
  ),
  287 => 
  array (
    0 => 'orExceptEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a or -entity:b',
  ),
  288 => 
  array (
    0 => 'andEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'entity:a and entity:b',
  ),
  289 => 
  array (
    0 => 'andNotEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a and -entity:b',
  ),
  290 => 
  array (
    0 => 'andExceptEntity',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-entity:a and -entity:b',
  ),
  291 => 
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
  292 => 
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
  293 => 
  array (
    0 => 'exceptEntity',
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
  294 => 
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
  295 => 
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
  296 => 
  array (
    0 => 'orExceptEntity',
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
  297 => 
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
  298 => 
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
  299 => 
  array (
    0 => 'andExceptEntity',
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
  300 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'conversation_id:a',
  ),
  301 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-conversation_id:a',
  ),
  302 => 
  array (
    0 => 'exceptConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-conversation_id:a',
  ),
  303 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or conversation_id:a',
  ),
  304 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -conversation_id:a',
  ),
  305 => 
  array (
    0 => 'orExceptConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -conversation_id:a',
  ),
  306 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and conversation_id:a',
  ),
  307 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -conversation_id:a',
  ),
  308 => 
  array (
    0 => 'andExceptConversationId',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -conversation_id:a',
  ),
  309 => 
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
  310 => 
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
  311 => 
  array (
    0 => 'exceptConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-conversation_id:b',
  ),
  312 => 
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
  313 => 
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
  314 => 
  array (
    0 => 'orExceptConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -conversation_id:b',
  ),
  315 => 
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
  316 => 
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
  317 => 
  array (
    0 => 'andExceptConversationId',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -conversation_id:b',
  ),
  318 => 
  array (
    0 => 'conversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a conversation_id:b',
  ),
  319 => 
  array (
    0 => 'notConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  320 => 
  array (
    0 => 'exceptConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a -conversation_id:b',
  ),
  321 => 
  array (
    0 => 'orConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a or conversation_id:b',
  ),
  322 => 
  array (
    0 => 'orNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a or -conversation_id:b',
  ),
  323 => 
  array (
    0 => 'orExceptConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a or -conversation_id:b',
  ),
  324 => 
  array (
    0 => 'andConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'conversation_id:a and conversation_id:b',
  ),
  325 => 
  array (
    0 => 'andNotConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a and -conversation_id:b',
  ),
  326 => 
  array (
    0 => 'andExceptConversationId',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-conversation_id:a and -conversation_id:b',
  ),
  327 => 
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
  328 => 
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
  329 => 
  array (
    0 => 'exceptConversationId',
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
  330 => 
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
  331 => 
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
  332 => 
  array (
    0 => 'orExceptConversationId',
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
  333 => 
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
  334 => 
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
  335 => 
  array (
    0 => 'andExceptConversationId',
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
  336 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio:a',
  ),
  337 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio:a',
  ),
  338 => 
  array (
    0 => 'exceptBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio:a',
  ),
  339 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio:a',
  ),
  340 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio:a',
  ),
  341 => 
  array (
    0 => 'orExceptBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio:a',
  ),
  342 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio:a',
  ),
  343 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio:a',
  ),
  344 => 
  array (
    0 => 'andExceptBio',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio:a',
  ),
  345 => 
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
  346 => 
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
  347 => 
  array (
    0 => 'exceptBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio:b',
  ),
  348 => 
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
  349 => 
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
  350 => 
  array (
    0 => 'orExceptBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio:b',
  ),
  351 => 
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
  352 => 
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
  353 => 
  array (
    0 => 'andExceptBio',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio:b',
  ),
  354 => 
  array (
    0 => 'bio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a bio:b',
  ),
  355 => 
  array (
    0 => 'notBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a -bio:b',
  ),
  356 => 
  array (
    0 => 'exceptBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a -bio:b',
  ),
  357 => 
  array (
    0 => 'orBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a or bio:b',
  ),
  358 => 
  array (
    0 => 'orNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a or -bio:b',
  ),
  359 => 
  array (
    0 => 'orExceptBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a or -bio:b',
  ),
  360 => 
  array (
    0 => 'andBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio:a and bio:b',
  ),
  361 => 
  array (
    0 => 'andNotBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a and -bio:b',
  ),
  362 => 
  array (
    0 => 'andExceptBio',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio:a and -bio:b',
  ),
  363 => 
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
  364 => 
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
  365 => 
  array (
    0 => 'exceptBio',
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
  366 => 
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
  367 => 
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
  368 => 
  array (
    0 => 'orExceptBio',
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
  369 => 
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
  370 => 
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
  371 => 
  array (
    0 => 'andExceptBio',
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
  372 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_name:a',
  ),
  373 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_name:a',
  ),
  374 => 
  array (
    0 => 'exceptBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_name:a',
  ),
  375 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio_name:a',
  ),
  376 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_name:a',
  ),
  377 => 
  array (
    0 => 'orExceptBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_name:a',
  ),
  378 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio_name:a',
  ),
  379 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_name:a',
  ),
  380 => 
  array (
    0 => 'andExceptBioName',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_name:a',
  ),
  381 => 
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
  382 => 
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
  383 => 
  array (
    0 => 'exceptBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_name:b',
  ),
  384 => 
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
  385 => 
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
  386 => 
  array (
    0 => 'orExceptBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio_name:b',
  ),
  387 => 
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
  388 => 
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
  389 => 
  array (
    0 => 'andExceptBioName',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio_name:b',
  ),
  390 => 
  array (
    0 => 'bioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a bio_name:b',
  ),
  391 => 
  array (
    0 => 'notBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  392 => 
  array (
    0 => 'exceptBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a -bio_name:b',
  ),
  393 => 
  array (
    0 => 'orBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a or bio_name:b',
  ),
  394 => 
  array (
    0 => 'orNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a or -bio_name:b',
  ),
  395 => 
  array (
    0 => 'orExceptBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a or -bio_name:b',
  ),
  396 => 
  array (
    0 => 'andBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_name:a and bio_name:b',
  ),
  397 => 
  array (
    0 => 'andNotBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a and -bio_name:b',
  ),
  398 => 
  array (
    0 => 'andExceptBioName',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_name:a and -bio_name:b',
  ),
  399 => 
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
  400 => 
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
  401 => 
  array (
    0 => 'exceptBioName',
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
  402 => 
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
  403 => 
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
  404 => 
  array (
    0 => 'orExceptBioName',
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
  405 => 
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
  406 => 
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
  407 => 
  array (
    0 => 'andExceptBioName',
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
  408 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'bio_location:a',
  ),
  409 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_location:a',
  ),
  410 => 
  array (
    0 => 'exceptBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-bio_location:a',
  ),
  411 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or bio_location:a',
  ),
  412 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_location:a',
  ),
  413 => 
  array (
    0 => 'orExceptBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -bio_location:a',
  ),
  414 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and bio_location:a',
  ),
  415 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_location:a',
  ),
  416 => 
  array (
    0 => 'andExceptBioLocation',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -bio_location:a',
  ),
  417 => 
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
  418 => 
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
  419 => 
  array (
    0 => 'exceptBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-bio_location:b',
  ),
  420 => 
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
  421 => 
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
  422 => 
  array (
    0 => 'orExceptBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -bio_location:b',
  ),
  423 => 
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
  424 => 
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
  425 => 
  array (
    0 => 'andExceptBioLocation',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -bio_location:b',
  ),
  426 => 
  array (
    0 => 'bioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a bio_location:b',
  ),
  427 => 
  array (
    0 => 'notBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  428 => 
  array (
    0 => 'exceptBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a -bio_location:b',
  ),
  429 => 
  array (
    0 => 'orBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a or bio_location:b',
  ),
  430 => 
  array (
    0 => 'orNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a or -bio_location:b',
  ),
  431 => 
  array (
    0 => 'orExceptBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a or -bio_location:b',
  ),
  432 => 
  array (
    0 => 'andBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'bio_location:a and bio_location:b',
  ),
  433 => 
  array (
    0 => 'andNotBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a and -bio_location:b',
  ),
  434 => 
  array (
    0 => 'andExceptBioLocation',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-bio_location:a and -bio_location:b',
  ),
  435 => 
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
  436 => 
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
  437 => 
  array (
    0 => 'exceptBioLocation',
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
  438 => 
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
  439 => 
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
  440 => 
  array (
    0 => 'orExceptBioLocation',
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
  441 => 
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
  442 => 
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
  443 => 
  array (
    0 => 'andExceptBioLocation',
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
  444 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place:a',
  ),
  445 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place:a',
  ),
  446 => 
  array (
    0 => 'exceptPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place:a',
  ),
  447 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or place:a',
  ),
  448 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place:a',
  ),
  449 => 
  array (
    0 => 'orExceptPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place:a',
  ),
  450 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and place:a',
  ),
  451 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place:a',
  ),
  452 => 
  array (
    0 => 'andExceptPlace',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place:a',
  ),
  453 => 
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
  454 => 
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
  455 => 
  array (
    0 => 'exceptPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place:b',
  ),
  456 => 
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
  457 => 
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
  458 => 
  array (
    0 => 'orExceptPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -place:b',
  ),
  459 => 
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
  460 => 
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
  461 => 
  array (
    0 => 'andExceptPlace',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -place:b',
  ),
  462 => 
  array (
    0 => 'place',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a place:b',
  ),
  463 => 
  array (
    0 => 'notPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a -place:b',
  ),
  464 => 
  array (
    0 => 'exceptPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a -place:b',
  ),
  465 => 
  array (
    0 => 'orPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a or place:b',
  ),
  466 => 
  array (
    0 => 'orNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a or -place:b',
  ),
  467 => 
  array (
    0 => 'orExceptPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a or -place:b',
  ),
  468 => 
  array (
    0 => 'andPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place:a and place:b',
  ),
  469 => 
  array (
    0 => 'andNotPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a and -place:b',
  ),
  470 => 
  array (
    0 => 'andExceptPlace',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place:a and -place:b',
  ),
  471 => 
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
  472 => 
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
  473 => 
  array (
    0 => 'exceptPlace',
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
  474 => 
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
  475 => 
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
  476 => 
  array (
    0 => 'orExceptPlace',
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
  477 => 
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
  478 => 
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
  479 => 
  array (
    0 => 'andExceptPlace',
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
  480 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'place_country:a',
  ),
  481 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place_country:a',
  ),
  482 => 
  array (
    0 => 'exceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-place_country:a',
  ),
  483 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or place_country:a',
  ),
  484 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place_country:a',
  ),
  485 => 
  array (
    0 => 'orExceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -place_country:a',
  ),
  486 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and place_country:a',
  ),
  487 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place_country:a',
  ),
  488 => 
  array (
    0 => 'andExceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -place_country:a',
  ),
  489 => 
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
  490 => 
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
  491 => 
  array (
    0 => 'exceptPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-place_country:b',
  ),
  492 => 
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
  493 => 
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
  494 => 
  array (
    0 => 'orExceptPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -place_country:b',
  ),
  495 => 
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
  496 => 
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
  497 => 
  array (
    0 => 'andExceptPlaceCountry',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -place_country:b',
  ),
  498 => 
  array (
    0 => 'placeCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a place_country:b',
  ),
  499 => 
  array (
    0 => 'notPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a -place_country:b',
  ),
  500 => 
  array (
    0 => 'exceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a -place_country:b',
  ),
  501 => 
  array (
    0 => 'orPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a or place_country:b',
  ),
  502 => 
  array (
    0 => 'orNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a or -place_country:b',
  ),
  503 => 
  array (
    0 => 'orExceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a or -place_country:b',
  ),
  504 => 
  array (
    0 => 'andPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'place_country:a and place_country:b',
  ),
  505 => 
  array (
    0 => 'andNotPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a and -place_country:b',
  ),
  506 => 
  array (
    0 => 'andExceptPlaceCountry',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-place_country:a and -place_country:b',
  ),
  507 => 
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
  508 => 
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
  509 => 
  array (
    0 => 'exceptPlaceCountry',
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
  510 => 
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
  511 => 
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
  512 => 
  array (
    0 => 'orExceptPlaceCountry',
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
  513 => 
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
  514 => 
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
  515 => 
  array (
    0 => 'andExceptPlaceCountry',
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
  516 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'lang:a',
  ),
  517 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-lang:a',
  ),
  518 => 
  array (
    0 => 'exceptLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => '-lang:a',
  ),
  519 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or lang:a',
  ),
  520 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -lang:a',
  ),
  521 => 
  array (
    0 => 'orExceptLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'or -lang:a',
  ),
  522 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and lang:a',
  ),
  523 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -lang:a',
  ),
  524 => 
  array (
    0 => 'andExceptLang',
    1 => 
    array (
      0 => 'a',
    ),
    2 => 'and -lang:a',
  ),
  525 => 
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
  526 => 
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
  527 => 
  array (
    0 => 'exceptLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => '-lang:b',
  ),
  528 => 
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
  529 => 
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
  530 => 
  array (
    0 => 'orExceptLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'or -lang:b',
  ),
  531 => 
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
  532 => 
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
  533 => 
  array (
    0 => 'andExceptLang',
    1 => 
    array (
      0 => 
      array (
        0 => 'b',
      ),
    ),
    2 => 'and -lang:b',
  ),
  534 => 
  array (
    0 => 'lang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a lang:b',
  ),
  535 => 
  array (
    0 => 'notLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a -lang:b',
  ),
  536 => 
  array (
    0 => 'exceptLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a -lang:b',
  ),
  537 => 
  array (
    0 => 'orLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a or lang:b',
  ),
  538 => 
  array (
    0 => 'orNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a or -lang:b',
  ),
  539 => 
  array (
    0 => 'orExceptLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a or -lang:b',
  ),
  540 => 
  array (
    0 => 'andLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => 'lang:a and lang:b',
  ),
  541 => 
  array (
    0 => 'andNotLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a and -lang:b',
  ),
  542 => 
  array (
    0 => 'andExceptLang',
    1 => 
    array (
      0 => 'a',
      1 => 'b',
    ),
    2 => '-lang:a and -lang:b',
  ),
  543 => 
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
  544 => 
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
  545 => 
  array (
    0 => 'exceptLang',
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
  546 => 
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
  547 => 
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
  548 => 
  array (
    0 => 'orExceptLang',
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
  549 => 
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
  550 => 
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
  551 => 
  array (
    0 => 'andExceptLang',
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
