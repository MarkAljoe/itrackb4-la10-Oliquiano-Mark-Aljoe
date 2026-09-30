# itrackb4-la6-Oliquiano-Mark-Aljoe

## Lab Activity 6 — Two Filters, One Route

**Q1**
No new route was needed because the router only looks at the URL path when deciding
which controller and method to use. Query strings are not part of the path, so adding
a second filter with a query parameter does not require a new route. The same index
route handles all four URLs — with no filters, one filter, or both filters applied.

**Q2**
If both filters were route parameters, the URL would need to include the year value
as part of the path, such as /movies/genre//rating/4. Since there is no genre filter,
the URL would need a placeholder or an optional segment just to get to the year value.
This makes the URL awkward and requires extra route patterns to handle every combination.

**Q3**
The detail page needed a change to the pattern — adding the wildcard `movies*` — because
the path is longer than `/movies`. The filter applied case needed nothing, because query
strings are not part of the path and `request()->is()` only checks the path, so it
already matched without any change.

**Q4**
The old filter method was deleted because it was replaced by a better implementation
using query strings, and nothing will ever point to it again. The empty store and update
methods are different — they represent work still to come in future activities. Leaving
them in records what is still outstanding, while leaving the old filter method in would
mean having two filter implementations, one of them dead.