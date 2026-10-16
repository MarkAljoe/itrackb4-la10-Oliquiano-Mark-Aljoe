# LA9 — Movies

**F1. Which column did you make nullable, and why?**

I made the `rating` column nullable because not all movies have a confirmed age rating. The other columns, such as `title`, `genre`, `release_year`, and `is_featured`, are essential for every movie record, so they should not be left empty.

**F2. Which step failed first, and what did the error say?**

The first step that failed was Part B, when I tried to create a record in Tinker without defining `$fillable`. Laravel threw a `MassAssignmentException`, indicating that the model did not allow mass assignment. The error helped me identify the problem and add the necessary fields to `$fillable`.

**F3. You changed no Blade file in Part D, yet your pages still work. Why?**

The Blade files already used the same variable names, such as `$movies` and `$movie`, that the controller passes using `compact()`. The views do not depend on whether the data comes from a JSON file or an Eloquent query. As long as the controller provides the expected variables and data structure, the pages can render correctly without changing the Blade files.