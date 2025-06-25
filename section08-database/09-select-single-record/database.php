<?php

// https://www.php.net/manual/en/class.pdo.php
// use PHP PDO class to connect your PHP application to a database server
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'phpapp';
$password = 'phpapp';

// string that with associated dta structure used to describe a connection to a data source
/// https://en.wikipedia.org/wiki/Data_source_name 
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

// basic try/catch syntax with PHP
try {
  // create PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // set pdo attribute to only return associative arrays
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo 'Connection Failed: ' . $e->getMessage();
}
