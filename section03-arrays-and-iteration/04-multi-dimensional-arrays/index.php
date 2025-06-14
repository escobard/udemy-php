<?php
$output = null;

// multidimensional arrays can be manipulated with the same functions as a regular & associated array

// simple
$fruits = [
  ['Apple', 'Red'],
  ['Orange', 'Orange'],
  ['Banana', 'Yellow']
];

// select elements within multimensional array
$output = $fruits[0][0];

// add an element to the multimensional array at next index position
$fruits[] = ['Grape', 'Purple'];

// associative array within array
$users = [
  ['name' => 'John', 'email' => 'john@gmail.com', 'password' => '12345'],
  ['name' => 'james', 'email' => 'james@gmail.com', 'password' => '12345'],
  ['name' => 'dan', 'email' => 'dan@gmail.com', 'password' => '12345']
];

// add an element after last index of multidimensional array
$users[] = ['name' => 'mike', 'email' => 'mike@gmail.com', 'password' => '12345'];

// another way to add an element after last index of multidimensional array
array_push($users, ['name' => 'bob', 'email' => 'bob@gmail.com', 'password' => '12345']);

// remove value at last index
array_pop($users);

// remove value at first index
array_shift($users);

// select key value within associative array
$output = $users[1]['email'];

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
      <p class="text-xl"><?= $output ?></p>
      <p>
      <pre>
          <?php print_r($users) ?>
        </pre>
      </p>
    </div>
  </div>
</body>

</html>