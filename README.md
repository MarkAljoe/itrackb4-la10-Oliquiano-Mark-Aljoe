# LA7 Reasoning Answers

## Q1
With POST, refreshing the page after submitting the form makes the browser ask for confirmation before resubmitting the form data. With GET, the submitted data becomes part of the URL, such as /movies?title=Inception, so refreshing, bookmarking, or going back to that URL can request the same data again without asking for confirmation. If the form used GET for creating a movie, the request could run again and potentially add another record to movies.json.

## Q2
Laravel's validate() throws a ValidationException when the submitted data is invalid, so the lines after validate() in store() are not executed. This means getMovies() and saveMovies() are never reached, so the invalid movie is not saved to movies.json. Laravel redirects the visitor back to /movies/create with the validation errors and the old input, which are then used by @error and old() in create.blade.php. 

## Q3
The layout checks session('success') on every page, but the success message is a temporary flash message that only exists for the next request. For example, after successfully adding Baymax, the controller redirects to the movies page, so session('success') contains the message and the @if displays it there. When the Featured Movies page is visited afterward, session('success') returns null, so the @if condition is false and nothing is displayed.