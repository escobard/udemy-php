<?php

$age = 30;
// If statement
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
}

echo '<br/>';

// If-Else
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else {
  echo 'You are not old enough to drink in the US';
}

echo '<br/>';

// Nested if statement
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else {
  // In PHP, else is triggered EVEN if the if statement is met
  if ($age >= 18) {
    echo 'You are old enough to vote in the US';
  } else {
    echo 'You are not old enough to drink in the US';
  }
}

echo '<br/>';

// If-Else-If
if ($age >= 21) {
  echo 'You are old enough to drink in the US';
} else if ($age >= 18) {
  echo 'You are old enough to vote in the US';
} else {
  echo 'You are not old enough to drink and vote in the US';
}
