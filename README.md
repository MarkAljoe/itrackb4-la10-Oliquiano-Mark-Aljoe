# ITRACKB4 LA10 — Movies

## G1. Which column did you turn into a table, and why that one?
I turned the `genre` column into a lookup table because the same genre values
like Sci-Fi, Action, and Thriller repeat across many movie records. It is a
thing in its own right that could one day have its own details. Columns like
`release_year`, `rating`, and `is_featured` are just plain values that belong
only to that movie, so they do not qualify.

## G2. What number did screenshot 6 show, and why exactly that number?
Screenshot 6 showed 8 queries. There was 1 query to fetch all movies, then
1 separate query for each of the 6 movies to get its genre through the
relationship, plus 1 query to load all genres for the filter buttons.
That is 8 total — one extra query per movie is the N+1 problem.

## G3. What would break if you named belongsTo in the plural?
If the method was named `genres()` instead of `genre()`, Eloquent would look
for a column called `genres_id` in the movies table instead of `genre_id`.
That column does not exist, so every call to `$movie->genre->name` would
crash with an error saying the relationship could not be found.