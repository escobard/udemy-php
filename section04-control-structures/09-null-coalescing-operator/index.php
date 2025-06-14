<?php

// $favoriteColor = 'red';

// traditional way of using ternary operator to check if variable exists (or value is null)
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

// null coalescing checks if left side value is unset / is null, then performs right side operation if left side is unset/null
// JS has the same operator but it is not too used (from what I have seen)
$color = $favoriteColor ?? 'blue';

// multiline ternary operator - looks ugly, probably shouldn't use
$color = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

// same outcome as line 13 but with null coalescing checks (much cleaner syntax)
$color = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

echo $color;
