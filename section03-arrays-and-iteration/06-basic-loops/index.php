<?php

// basic PHP for loop syntax
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br />';
};

// basic PHP while loop syntax
$i = 0;

while ($i < 10) {
    echo $i . '<br />';
    $i++;
};

// basic do while loops - dont think I have used these before
/// do while loops run the loop logic first and THEN check if the condition has been met - this is different than for or while loops, which check the condition prior to running the loop logic

do {
    echo $i;
    $i++;
} while ($i < 10)
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
            <ul>
                <!-- Another way of using a for loop in PHP -->
                <?php for ($i = 0; $i <= 10; $i++): ?>
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>
                <!-- Another way of using a while loop in PHP -->
                <?php $i = 0;
                while ($i < 10): ?>
                    <li>Number: <?= $i ?></li>
                <?php $i++;
                endwhile; ?>
            </ul>
        </div>
    </div>
</body>

</html>