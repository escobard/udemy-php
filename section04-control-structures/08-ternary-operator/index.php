<?php


$score = 50;

// traditional if statement
if ($score > 40) {
  echo 'High Score';
} else {
  echo 'Low Score';
}

echo '<br>';
// ternary operator - same if statement with syntax sugar - exactly like JS

echo $score > 40 ? 'High Score' : 'Low Score';
