<?php

// annonymous function in php (also called lambda functions, lol)

/// function without a name, must be used with a variable to invoke
function ($number) {
  return $number * $number;
};

// sample invokation with a variable
$square = function ($number) {
  return $number * $number;
};

$result = $square(5);

echo 'The square of 5 is ' . $result;

// closures
function createCounter()
{
  $count = 0;

  // example closure - allow inner function to use a variable from parent function scope
  $counter = function () use (&$count) {
    return ++$count;
  };

  return $counter;
}

$counter = createCounter();

echo $counter() . '<br>';
