<?php
// https://www.php.net/manual/en/ref.array.php
$output = null;

$ids = [10, 22, 15, 45, 67];
$users = ['user4', 'user2', 'user3'];

// returns count of an array/object;
$output = count($ids);

// sorts array from lowest to highest value (ascending)
sort($ids);

// behaves weirdly when sorting through various data types
sort($users);

// pushes a value into an array, after the last array index
array_push($users, 'user5');

// pushes a value into the array, before the first array index
array_unshift($ids, 100);

// removes the last array value
array_pop($ids);

// removes the first array value
array_shift($ids);

// sorts array from highest to lowest value (descending)
rsort($users);

// returns part of the array as a new array
// requires array, slice start & slice end (optional), or it slices all available indexes
$ids2 = array_slice($ids, 2, 10);
// var_dump($ids2);

// replaces array values, splice start and end, and value to apply to values within start and end range
array_splice($ids, 1, 1, 'New ID');

// sums everything within an array
$output = 'Sum of IDS:' . array_sum($ids);

// searchs the array a given value
$output = 'User 2 is at index:' . array_search('user2', $users);

// checks if a value exists within an array, returns boolean
$output = 'User 3 Exists: ' . in_array('user3', $users);


$tags = 'tech,code,programming';
// turns string into an array, requires string to match seperator pattern
$tagsArray = explode(',', $tags);
var_dump($tagsArray);

// turns an array into a string
$output = implode(', ', $users);

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
            <h2 class="text-xl font-semibold my-4">IDS Array:</h2>
            <p>
            <pre>
                <?php print_r($ids) ?>
            </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">uSERS Array:</h2>
            <p>
            <pre>
                <?php print_r($users) ?>
            </pre>
            </p>
        </div>
    </div>
</body>

</html>