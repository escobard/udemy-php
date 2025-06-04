<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$bool1 = true;
$bool2 = false;
$null = null;


$result = $number1 + $number2;

// 1. Implicit conversion
// php turns a string into an int with addition operations
/// php only turns a string to an int if the string has only number values
$result = $number1 + $number3;

// php turns an int into a string with concatenation
$result = $number1 . $number2;

// php turns a boolean / null into an int (1 if true 0 if false or null) with addition operations
$result = $number1 + $bool1;

// 2. Explicit conversion
$result = (string) $number1;
$result = (int) $number3;

// any number besides 0 can be turned to a true boolean, 0s convert to false boolean
$result = (bool) $number1;

var_dump($result);
