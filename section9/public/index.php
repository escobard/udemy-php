<?php

// imports all the content from a specific file
require '../helpers.php';

// code from that file then becomes available for use - as shown with basePath function
// require basePath('views/home.view.php');

$routes = [
  '/' => 'controllers/home.php',
  '/listings' => 'controllers/listings/index.php',
  '/listings/create' => 'controllers/listings/create.php',
  '404' => 'controllers/error/404.php'
];

// grabs the request URL from PHP $_SERVER superglobal
$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
  require(basePath($routes[$uri]));
} else {
  require basePath($routes['404']);
}
