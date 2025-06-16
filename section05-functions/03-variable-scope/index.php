<?php

// global variable - not sure if this is in scope of the file or all php runtime?
$name = 'Alice';

function sayHello()
{
  // local scope does not have access to global variables, unless global is defined
  global $name;

  // global variable can be changed from local scope - this is dangerous
  $name = 'Bob';
  echo 'Hello ' . $name;
}

ssayHello();
