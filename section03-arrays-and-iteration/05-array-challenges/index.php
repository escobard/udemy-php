<?php

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/

$numbers = [1, 2, 3, 4, 5, 6, 7];
$numbersSum = array_sum($numbers);
$numbersCount = count($numbers);

echo "<h3>Sum Of An Array</h3>";
echo "<p>The sum of the $numbersCount numbers is: $numbersSum </p>";


/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];

$rcolors = array_reverse($colors);

array_push($rcolors, 'purple', 'orange');

// can also use array merge to add multiple values to the end of an array
$merge = array_merge($colors, ['purple', 'orange']);

$rcolors[1] = 'pink';

array_pop($rcolors);

print_r($rcolors);

/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, job_title, company, contact_email, and contact_phone. Also add an array field for skills. The skills array should be an array of strings with each skill a person has. For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$jobListings = [
  [
    'id' => '12345',
    'job_title' => 'Developer',
    'company' => 'Microsoft',
    'contact_email' => 'test@test.com',
    'contact_phone' => '1234567',
    'skills' => ['PHP', 'MySQL', 'JS', 'HTML']
  ],
  [
    'id' => '12345',
    'job_title' => 'Developer',
    'company' => 'Microsoft',
    'contact_email' => 'test@test.com',
    'contact_phone' => '1234567',
    'skills' => ['PHP', 'MySQL', 'JS', 'HTML']
  ],
  [
    'id' => '12345',
    'job_title' => 'Developer',
    'company' => 'Microsoft',
    'contact_email' => 'test@test.com',
    'contact_phone' => '1234567',
    'skills' => ['PHP', 'MySQL', 'JS', 'HTML']
  ]
];

array_push(
  $jobListings,
  [
    'id' => '12345',
    'job_title' => 'Developer',
    'company' => 'Microsoft',
    'contact_email' => 'test@test.com',
    'contact_phone' => '1234567',
    'skills' => ['Python', 'MySQL', 'JS', 'HTML']
  ]
);

print_r($jobListings[1]['job_title']);
print_r($jobListings[2]['skills'][0]);
