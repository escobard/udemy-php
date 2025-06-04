<!-- This is a basic PHP tag-->
<?php
// this is a basic comment on PHP - comments are not sent to the browser
/* 
    This is a multi-line 
    comment in PHP
*/

// echo command returns values to the browser
echo 'Hello from PHP';
// print is another way to return values to the browser, but only returns a single value
print 'test';
// echo allows for the return of multiple values as long as they are comma separated
echo 'test', 'multiple', 'values'
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?php echo 'Learn PHP From Scratch'; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">
                <!-- This is PHP shorthand for echo -->
                <?= 'Learn PHP From Scratch'; ?>
            </h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <?php echo '<p>In this course, you will learn the fundamentals of the PHP language</p>'; ?>
        </div>
    </div>
</body>

</html>