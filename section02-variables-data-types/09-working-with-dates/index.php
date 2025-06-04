<?php
$output = null;

// helper function to create a date in PHP
/// requires an argument to specify date format, defaults to todays date if no date is passed
/// https://www.php.net/manual/en/function.date.php
$output = date('Y');

// get current month
$output = date('m');

// get current day
$output = date('D');

// get current hour
$output = date('h');

// get current minute
$output = date('i');

// get current second
$output = date('s');

// get year, month, day from date
$output = date('Y-m-d');

// can accept a unix timestamp which is convered to the provided format
$output = date('Y', 936345600);

// strtotime can be used to convery string date into a unix timestamp
$output = date('Y', strtotime('1999-09-01'));

// fully formatted date
$output = date('Y-m-d h:i:s a');
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
            <p class="text-xl"><?php echo $output; ?></p>
        </div>
    </div>
</body>

</html>