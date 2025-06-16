<?php

// callback function - passing a function to a function
$numbers = [1, 2, 3, 4, 5, 6, 7];

$square = function ($number) {
  return $number * $number;
};

// example function callback invocation with php native function
$squaredNumbers =

  // map through each array index and do something with each array item
  array_map($square, $numbers);

print_r($squaredNumbers);

// example function callback invocation
function applyCallback($callback, $value)
{
  return $callback($value);
}

$double = function ($number) {
  return $number * 2;
};

$result = applyCallback($double, 5);

echo '<br>';

echo $result;
