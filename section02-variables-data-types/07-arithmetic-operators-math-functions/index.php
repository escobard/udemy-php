<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = null;

$num1 = 20;
$num2 = 7;

// addition
$output = "$num1 + $num2 = " . $num1 + $num2;

// subtraction
$output = "$num1 - $num2 = " . $num1 - $num2;

// multiplication
$output = "$num1 * $num2 = " . $num1 * $num2;

// division
$output = "$num1 / $num2 = " . $num1 / $num2;

// modulus
$output = "$num1 % $num2 = " . $num1 % $num2;


// assignment operator
$num3 = 10;
// $num3 = $num3 + 20;
// adds the current value of $num3 with the number after +=
/// works with all arithmetic operators 
$num3 += 20;

// built in php functions

// generates a random number
$output = rand();

// genereates a random number between the first and second argument
$output = rand(1, 10);

// rounds up to the nearest whole number
$output = round(4.7);

// rounds up to the nearest whole number rounded up from the provided decimal
$output = ceil(4.20);

// rounds down to the nearest whole number rounded down from provided decimal
$output = floor(4.9);

// square root
$output = sqrt(64);

// pi
$output = pi();

// absolute number - positive number of a value
$output = abs(-4.7);

// retrieve highest value in an arrange of numbers
$output = max(1, 2, 3, 50);
// also accepts arrays
$output = max([1, 2, 3, 50]);

// retrieve lowest value in an arrange of numbers
$output = min(1, 2, 3, 50);
// also accepts arrays
$output = min([1, 2, 3, 50]);

// formats number for currencies
// decimal / thousand formats are optional
$output = number_format(123423.12321, 2, '.', ',')

// $output = $num3;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl">
        <?= $output ?>
      </p>
    </div>
  </div>
</body>

</html>