<?php

/**
 * Get the root path for the project
 * 
 * @param string $path
 * @return string 
 */

function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * @param string $name
 * @return void
 */
function loadView($name, $data = [])
{
  $viewPath = basePath("App/views/{$name}.view.php");

  if (file_exists($viewPath)) {
    // https://www.php.net/manual/en/function.extract.php
    // extracts array values into the provided array key 
    /// in this case, extracts array values into the variable 'listings'
    /// would be the same as doing $listings = $data[0];
    /// works with multiple array keys, allowing for easier syntax access
    extract($data);
    require $viewPath;
  } else {
    echo "View '{$name} not found!'";
  }
}

/**
 * Load a partial
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
  $partialPath = basePath("App/views/partials/{$name}.php");
  if (file_exists($partialPath)) {
    require $partialPath;
  } else {
    echo "Partial {$partialPath} not found!'";
  }
}

/**
 * Inspect value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
  echo '<pre>';
  var_dump($value);
  echo '<pre>';
}


/**
 * Inspect value(s) then die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
  echo '<pre>';
  var_dump($value);
  echo '<pre>';
  die();
}

/**
 * Format Salary
 * 
 * @param string $salary
 * @return string 
 */

function formatSalary($salary)
{
  return '$' . number_format(floatval($salary));
}
