<?php

// constants in PHP are global, convention to use all uppercase, two general ways to define

// option 1 - traditional version
define('APP_NAME', 'My App');
define('APP_VERSION', '0.0.1');

echo APP_NAME;
echo APP_VERSION;

// option 2 - modern version
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;

function run()
{
  echo APP_NAME;
  echo DB_NAME, DB_HOST;
};
