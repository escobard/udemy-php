<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

const BASE_TEMP = 32;

$fahrenheitToCelsius = fn($fahrenheit) => ($fahrenheit - BASE_TEMP) * 5 / 9;

echo $fahrenheitToCelsius(92);

echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ['bob', 'jay', 'jim', 'lin', 'dan'];

function printNamesToUpperCase(array $names): void
{
  foreach ($names as $name) {
    echo strtoupper($name . ', ');
  }
}

printNamesToUpperCase($names);

echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/
