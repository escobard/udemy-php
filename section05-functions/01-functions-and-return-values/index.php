<?php

// basic PHP function syntax
function sayHello()
{
  echo 'Hello World';
}

// function with return 
function sayGoodbye()
{
  return 'Goodbye';
}

sayHello();
echo '<br>';

// if a function returns a value, the function callback must be echoed to actually return the function's return value
echo sayGoodbye();
