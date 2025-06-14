<?php

/*
  Challenge 1: Create a multiplication table using a nested `for` loop. The table should look like this:

1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
1 x 4 = 4
1 x 5 = 5
1 x 6 = 6
1 x 7 = 7
1 x 8 = 8
1 x 9 = 9
1 x 10 = 10
2 x 1 = 2
2 x 2 = 4
2 x 3 = 6
2 x 4 = 8
... 
10 x 10 = 100
*/
echo '<h3>Multiplication Table</h3>';
$multiplicationTable = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($multiplicationTable as $multiplication) {
  for ($i = 1; $i <= count($multiplicationTable); $i++) {
    echo $multiplication . " x " . $i . " = " . $multiplication * $i . "<br/>";
  }
}

/*
  Challenge 2: Get the sum of the numbers in an array by using a foreach loop. For bonus points, also use a for loop.
*/

echo '<h3>Array Sum</h3>';

$numbers = [1, 2, 3, 4, 5];
$sum;
foreach ($numbers as $number) {
  $sum += $number;
};
echo $sum;
/*
  Challenge 3: Calculate the average students grade from an array of students. Each student has their own array with the key 'grades'. 

  1. Create an array of students with their names and grades (0 - 100)
	2. Iterate over the students array with a foreach loop
	3. Calculate the average grade for each student
*/

echo '<h3>Average Grade</h3>';

$grades = [
  [
    'name' => 'Timmy',
    'grades' => [40, 60, 80, 90]
  ],
  [
    'name' => 'Jon',
    'grades' => [50, 80, 80, 40]
  ],
  [
    'name' => 'Bob',
    'grades' => [80, 90, 80, 100]
  ],
];

foreach ($grades as $student) {
  echo $student['name'] . " : " . "Average Grade = " . array_sum($student['grades']) / count($student['grades']) . "<br/>";
}
