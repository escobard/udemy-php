<?php
// set environment variable
// it's more common to place DB credentials in constants and use those instead of super globals
putenv('DB_HOST=localhost');
putenv('DB_USER=root');

// get environment variable
$host = getenv('DB_HOST');
$user = getenv('DB_USER');

// returns all environment variables in your system, lots of environment variables are available by default
// var_dump(getenv())

// global variable, all variables created outside of function scope are considered global by PHP
$foo = 'Global variable';

function test()
{
  $foo = 'Local variable';
  // global variables can be accesed by passing in the key as the variable name
  echo 'Global variable: ' . $GLOBALS['foo'] . '<br>';
  echo 'Local variable: ' . $foo;
}

test();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">System Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB Host:</strong>
        <?= $host ?>

      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB User:</strong>
        <?= $user ?>
      </div>

    </div>
</body>

</html>