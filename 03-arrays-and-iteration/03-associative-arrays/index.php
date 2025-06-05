<?php
$output = null;

// associative arrays key/value pairs, similar to objects in js / dictionaries in python
$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '123456',
    'hobbies' => ['Tennis', 'Gaming', 'Gym']
];

// cannot echo arrays directly!
// echo $user;

var_dump($user);

// pick value by key
$output = $user['name'];

// pick value by key, then nested value
$output = $user['hobbies'][1];

// add/update a value by key
$user['address'] = '132 address';

// removes value by key

unset($user['address']);
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
            <h2 class="text-xl font-semibold my-4">User Array:</h2>
            <p>
            <pre>
                    <?php print_r($user) ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>