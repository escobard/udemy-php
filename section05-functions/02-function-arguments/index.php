<?php

// basic function parameters in PHP
/// added types to try type setting in PHP
/// added default values to show syntax
function add(int $a = 1, int $b = 2): int
{
  return $a + $b;
}

// variable function parameter
/// allows for any number of arguments to be passed in which must be looped through (similar to JS spread operator)
function addAll(...$numbers)
{
  $total = 0;

  foreach ($numbers as $number) {
    $total += $number;
  }

  echo $total;
}

// basic function callback with arguments
echo add(1, 2);
echo '<br>';
echo add(100, 200);
echo '<br>';

// basic function callback with no arguments (using default values)
echo add();

// basic function argument with variable function arguments 
addAll(1, 2, 3, 4, 6, 7);
