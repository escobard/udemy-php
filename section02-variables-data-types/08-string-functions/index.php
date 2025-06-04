<?php
$output = null;
$string = 'Hello World';

// outputs the length of a string
$output = strlen($string);

// outputs the number of words in a string
$output = str_word_count($string);

// outputs the position of the matching word in a string
$output = strpos($string, 'World');

// get specific character by string index
$output = $string[4];

// pass in the string, start position and length
$output = substr($string, 6, 5);

// replace a substring with something else
$output = str_replace('World', 'Universe', $string);

// make all characters in a string lowercase
$output = strtolower($string);

// make all characters in a string uppercase
$output = strtoupper($string);

// capitalize the first letter of each word
$output = ucwords($string);

// remove spaces from string
$output = trim('         Hello World            ');
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
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>