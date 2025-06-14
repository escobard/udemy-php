<?php
$number = 1;

// while loop with comparison operators
while ($number <= 10) {
  // check if number is even, divide number by 2 and if remainder is 0, number is event
  if ($number % 2 === 0) {
    echo $number . ' is even <br>';
  } else {
    echo $number . ' is odd <br>';
  }
  $number++;
}

// break out of a for loop
for ($i = 0; $i <= 10; $i++) {
  if ($i == 5) {
    // break kills the loop, regardless of the the loop initiation conditions
    break;
  }

  echo $i . '<br>';
}

// skip and continue a loop
for ($i = 0; $i <= 10; $i++) {
  if ($i == 5) {
    // break kills the loop, regardless of the the loop initiation conditions
    print_r('Skip logic for #5');
    echo "<br>";
    continue;
  }

  echo $i . '<br>';
}

// conditional with a foreach loop
$studentGrades = [
  'John' => 75,
  'Jack' => 92,
  'Jill' => 100,
  'Joan' => 80
];

foreach ($studentGrades as $name => $grade) {
  if ($grade >= 90) {
    echo $name . ' has an excellent grade <br>';
  }
}
