# Upgrading from [fennb/phirehose](https://packagist.org/packages/fennb/phirehose)

We kept the name and public API similar so the upgrading can be made easy. But this not just
the [feenb/phirehose](https://packagist.org/packages/fennb/phirehose) code. While the architecture and concepts are kept
similar from the original, this one is properly typed, support for PHP8 and is **MIT** licensed. The repository has been
forked to show credits where it's due.

> The fact that this package is MIT licensed even though the concepts are coming from a GPL licensed package should be fine as far as I understand it as it's not just a ripoff. But please consider taking advice from an educated specialist if you have any doubts.

* Classes are namespaced in `RWC\Phirehose`.
* All silent errors are now converted to exceptions.
* All setters are now fluent
* `getFollow` becomes `getFollowedUsers`
* setLocationsByCircle has been removed, it is out of scope for this library, implement it yourself
* You can no longer set the consumer key and consumer secrety with constants.
* checkFilterPredicates is now addFilters