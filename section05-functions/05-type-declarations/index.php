<?php
// php types - introduced in PHP 5
// https://www.php.net/manual/en/language.types.declarations.php

// turns on strict types
declare(strict_types=1);

// basic type declarations
function getSum(int $a, int $b): void
{
  echo $a + $b;
};

getSum(1, 2);

function greeting(string $name): string
{
  return 'Hello! ' . $name;
};

greeting('Bob');
