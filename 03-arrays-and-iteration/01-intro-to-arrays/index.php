<?php

// initiate an array in php

/// method 1
$names = array('John', 'Jack', 'Jill');

/// method 2 - what is most used
$names = ['John', 'Jack', 'Jill'];
$numbers = [1, 2, 3, 4, 5, 6];

// selecting array values in php
echo $names[rand(0, 2)] . '<br />';

// add element to array by index
$names[3] = 'Jason';

// add element to last index in array
$names[] = 'Tyler';

// update existing index item
$names[3] = 'Changed';

// remove array index
unset($names[4]);

// pre tags format the output to improve readability
/// example of a basic PHP function
function inspect($value)
{
  echo '<pre>';
  // return full array
  var_dump($value);
  echo '</pre>';
}

// returns all the values of an array in order, useful when index values get removed/deleted and are no longer sequential
$numbers = array_values($numbers);

inspect($names);

// prints the values of each array index and the index
print_r($names);

// stops the program, making any code after the die() command is invoked unreachable
// die();
