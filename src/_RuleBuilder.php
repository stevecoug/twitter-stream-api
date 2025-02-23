<?php

namespace stevecoug\TwitterStream;

/**
 * @method RuleBuilder isRetweet()
 * @method RuleBuilder isNotRetweet()
 * @method RuleBuilder orIsRetweet()
 * @method RuleBuilder orIsNotRetweet()
 * @method RuleBuilder andIsRetweet()
 * @method RuleBuilder andIsNotRetweet()
 * @method RuleBuilder isReply()
 * @method RuleBuilder isNotReply()
 * @method RuleBuilder orIsReply()
 * @method RuleBuilder orIsNotReply()
 * @method RuleBuilder andIsReply()
 * @method RuleBuilder andIsNotReply()
 * @method RuleBuilder isQuote()
 * @method RuleBuilder isNotQuote()
 * @method RuleBuilder orIsQuote()
 * @method RuleBuilder orIsNotQuote()
 * @method RuleBuilder andIsQuote()
 * @method RuleBuilder andIsNotQuote()
 * @method RuleBuilder isVerified()
 * @method RuleBuilder isNotVerified()
 * @method RuleBuilder orIsVerified()
 * @method RuleBuilder orIsNotVerified()
 * @method RuleBuilder andIsVerified()
 * @method RuleBuilder andIsNotVerified()
 * @method RuleBuilder hasHashtags()
 * @method RuleBuilder hasNotHashtags()
 * @method RuleBuilder orHasHashtags()
 * @method RuleBuilder orHasNotHashtags()
 * @method RuleBuilder andHasHashtags()
 * @method RuleBuilder andHasNotHashtags()
 * @method RuleBuilder hasCashtags()
 * @method RuleBuilder hasNotCashtags()
 * @method RuleBuilder orHasCashtags()
 * @method RuleBuilder orHasNotCashtags()
 * @method RuleBuilder andHasCashtags()
 * @method RuleBuilder andHasNotCashtags()
 * @method RuleBuilder hasLinks()
 * @method RuleBuilder hasNotLinks()
 * @method RuleBuilder orHasLinks()
 * @method RuleBuilder orHasNotLinks()
 * @method RuleBuilder andHasLinks()
 * @method RuleBuilder andHasNotLinks()
 * @method RuleBuilder hasMentions()
 * @method RuleBuilder hasNotMentions()
 * @method RuleBuilder orHasMentions()
 * @method RuleBuilder orHasNotMentions()
 * @method RuleBuilder andHasMentions()
 * @method RuleBuilder andHasNotMentions()
 * @method RuleBuilder hasMedia()
 * @method RuleBuilder hasNotMedia()
 * @method RuleBuilder orHasMedia()
 * @method RuleBuilder orHasNotMedia()
 * @method RuleBuilder andHasMedia()
 * @method RuleBuilder andHasNotMedia()
 * @method RuleBuilder hasImages()
 * @method RuleBuilder hasNotImages()
 * @method RuleBuilder orHasImages()
 * @method RuleBuilder orHasNotImages()
 * @method RuleBuilder andHasImages()
 * @method RuleBuilder andHasNotImages()
 * @method RuleBuilder hasVideos()
 * @method RuleBuilder hasNotVideos()
 * @method RuleBuilder orHasVideos()
 * @method RuleBuilder orHasNotVideos()
 * @method RuleBuilder andHasVideos()
 * @method RuleBuilder andHasNotVideos()
 * @method RuleBuilder hasGeo()
 * @method RuleBuilder hasNotGeo()
 * @method RuleBuilder orHasGeo()
 * @method RuleBuilder orHasNotGeo()
 * @method RuleBuilder andHasGeo()
 * @method RuleBuilder andHasNotGeo()
 * @method RuleBuilder from(string|array $value)
 * @method RuleBuilder notFrom(string|array $value)
 * @method RuleBuilder orFrom(string|array $value)
 * @method RuleBuilder orNotFrom(string|array $value)
 * @method RuleBuilder andFrom(string|array $value)
 * @method RuleBuilder to(string|array $value)
 * @method RuleBuilder notTo(string|array $value)
 * @method RuleBuilder orTo(string|array $value)
 * @method RuleBuilder orNotTo(string|array $value)
 * @method RuleBuilder andTo(string|array $value)
 * @method RuleBuilder url(string|array $value)
 * @method RuleBuilder notUrl(string|array $value)
 * @method RuleBuilder orUrl(string|array $value)
 * @method RuleBuilder orNotUrl(string|array $value)
 * @method RuleBuilder andUrl(string|array $value)
 * @method RuleBuilder retweetsOf(string|array $value)
 * @method RuleBuilder notRetweetsOf(string|array $value)
 * @method RuleBuilder orRetweetsOf(string|array $value)
 * @method RuleBuilder orNotRetweetsOf(string|array $value)
 * @method RuleBuilder andRetweetsOf(string|array $value)
 * @method RuleBuilder context(string|array $value)
 * @method RuleBuilder notContext(string|array $value)
 * @method RuleBuilder orContext(string|array $value)
 * @method RuleBuilder orNotContext(string|array $value)
 * @method RuleBuilder andContext(string|array $value)
 * @method RuleBuilder entity(string|array $value)
 * @method RuleBuilder notEntity(string|array $value)
 * @method RuleBuilder orEntity(string|array $value)
 * @method RuleBuilder orNotEntity(string|array $value)
 * @method RuleBuilder andEntity(string|array $value)
 * @method RuleBuilder conversationId(string|array $value)
 * @method RuleBuilder notConversationId(string|array $value)
 * @method RuleBuilder orConversationId(string|array $value)
 * @method RuleBuilder orNotConversationId(string|array $value)
 * @method RuleBuilder andConversationId(string|array $value)
 * @method RuleBuilder bio(string|array $value)
 * @method RuleBuilder notBio(string|array $value)
 * @method RuleBuilder orBio(string|array $value)
 * @method RuleBuilder orNotBio(string|array $value)
 * @method RuleBuilder andBio(string|array $value)
 * @method RuleBuilder bioName(string|array $value)
 * @method RuleBuilder notBioName(string|array $value)
 * @method RuleBuilder orBioName(string|array $value)
 * @method RuleBuilder orNotBioName(string|array $value)
 * @method RuleBuilder andBioName(string|array $value)
 * @method RuleBuilder bioLocation(string|array $value)
 * @method RuleBuilder notBioLocation(string|array $value)
 * @method RuleBuilder orBioLocation(string|array $value)
 * @method RuleBuilder orNotBioLocation(string|array $value)
 * @method RuleBuilder andBioLocation(string|array $value)
 * @method RuleBuilder place(string|array $value)
 * @method RuleBuilder notPlace(string|array $value)
 * @method RuleBuilder orPlace(string|array $value)
 * @method RuleBuilder orNotPlace(string|array $value)
 * @method RuleBuilder andPlace(string|array $value)
 * @method RuleBuilder placeCountry(string|array $value)
 * @method RuleBuilder notPlaceCountry(string|array $value)
 * @method RuleBuilder orPlaceCountry(string|array $value)
 * @method RuleBuilder orNotPlaceCountry(string|array $value)
 * @method RuleBuilder andPlaceCountry(string|array $value)
 * @method RuleBuilder lang(string|array $value)
 * @method RuleBuilder notLang(string|array $value)
 * @method RuleBuilder orLang(string|array $value)
 * @method RuleBuilder orNotLang(string|array $value)
 * @method RuleBuilder andLang(string|array $value)
 * @method RuleBuilder urlTitle(string|array $value)
 * @method RuleBuilder notUrlTitle(string|array $value)
 * @method RuleBuilder orUrlTitle(string|array $value)
 * @method RuleBuilder orNotUrlTitle(string|array $value)
 * @method RuleBuilder andUrlTitle(string|array $value)
 * @method RuleBuilder urlDescription(string|array $value)
 * @method RuleBuilder notUrlDescription(string|array $value)
 * @method RuleBuilder orUrlDescription(string|array $value)
 * @method RuleBuilder orNotUrlDescription(string|array $value)
 * @method RuleBuilder andUrlDescription(string|array $value)
 * @method RuleBuilder urlContains(string|array $value)
 * @method RuleBuilder notUrlContains(string|array $value)
 * @method RuleBuilder orUrlContains(string|array $value)
 * @method RuleBuilder orNotUrlContains(string|array $value)
 * @method RuleBuilder andUrlContains(string|array $value)
 * @method RuleBuilder source(string|array $value)
 * @method RuleBuilder notSource(string|array $value)
 * @method RuleBuilder orSource(string|array $value)
 * @method RuleBuilder orNotSource(string|array $value)
 * @method RuleBuilder andSource(string|array $value)
 * @method RuleBuilder inReplyToTweetId(string|array $value)
 * @method RuleBuilder notInReplyToTweetId(string|array $value)
 * @method RuleBuilder orInReplyToTweetId(string|array $value)
 * @method RuleBuilder orNotInReplyToTweetId(string|array $value)
 * @method RuleBuilder andInReplyToTweetId(string|array $value)
 * @method RuleBuilder retweetsOfTweetId(string|array $value)
 * @method RuleBuilder notRetweetsOfTweetId(string|array $value)
 * @method RuleBuilder orRetweetsOfTweetId(string|array $value)
 * @method RuleBuilder orNotRetweetsOfTweetId(string|array $value)
 * @method RuleBuilder andRetweetsOfTweetId(string|array $value)
 * @method RuleBuilder withFollowersCount(int $min, ?int $max = null)
 * @method RuleBuilder notWithFollowersCount(int $min, ?int $max = null)
 * @method RuleBuilder orWithFollowersCount(int $min, ?int $max = null)
 * @method RuleBuilder andWithFollowersCount(int $min, ?int $max = null)
 * @method RuleBuilder withTweetsCount(int $min, ?int $max = null)
 * @method RuleBuilder notWithTweetsCount(int $min, ?int $max = null)
 * @method RuleBuilder orWithTweetsCount(int $min, ?int $max = null)
 * @method RuleBuilder andWithTweetsCount(int $min, ?int $max = null)
 * @method RuleBuilder withFollowingCount(int $min, ?int $max = null)
 * @method RuleBuilder notWithFollowingCount(int $min, ?int $max = null)
 * @method RuleBuilder orWithFollowingCount(int $min, ?int $max = null)
 * @method RuleBuilder andWithFollowingCount(int $min, ?int $max = null)
 * @method RuleBuilder withListedCount(int $min, ?int $max = null)
 * @method RuleBuilder notWithListedCount(int $min, ?int $max = null)
 * @method RuleBuilder orWithListedCount(int $min, ?int $max = null)
 * @method RuleBuilder andWithListedCount(int $min, ?int $max = null)
 */
class _RuleBuilder
{
}
