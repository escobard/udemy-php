<?php

// normal function definition & callback
function add($a, $b)
{
  return $a + $b;
}

echo add(2, 5);

echo '<br>';

// arrow function definition
/// syntax shorthand for return
$add = fn($a, $b) => $a + $b;

echo $add(2, 5);

echo '<br>';

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn($number) => $number, $numbers);

print_r($squaredNumbers);
