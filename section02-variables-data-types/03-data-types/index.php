<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource - usually a file or external resource
*/

// String
// single quote
$name = 'Brad Traversy';
// double quote
$name2 = "John";

// var_dump() internal function can be used to determine variable type, length and value
var_dump($name);
echo '<br />';

// echo getType() can be used to fetch a variable type
// echo getType($name);

// Integer
$age = 35;
var_dump($age);
echo '<br />';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br />';

// Boolean
$isLoaded = true;
var_dump($isLoaded);

// Array
$friends = ['John', 'Jack', 1];
var_dump($friends);

// Object
// pretty ugly syntax to define an object
$person = new stdClass();
var_dump($person);
echo '<br />';

// Null
$car = null;
var_dump($car);
echo '<br />';

// Resource
// fopen opens a file 
$file = fopen('sample.txt', '');
var_dump($file);
