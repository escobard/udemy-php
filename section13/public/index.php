<?php

// loads required packages from vendor
require __DIR__ . '/../vendor/autoload.php';

// import files under a namespace
use Framework\Router;
use Framework\Session;

Session::start();

// imports all the content from a specific file
require '../helpers.php';

// // built in PHP function for custom autoloaders
// /// class argument seemingly looks for all php files that start with Uppercase (which is usually a class file)
// spl_autoload_register(function ($class) {

//   $path = basePath('Framework/' . $class . '.php');

//   // checks if the path exists, then if it does, import the file
//   if (file_exists($path)) {
//     require $path;
//   }
// });

// needs to be instantiated prior to getting routes.php, because routes.php requires $router variable to contain valid router class
$router = new Router();
$routes = require basePath('routes.php');

// grabs the request URL from PHP $_SERVER superglobal
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route the request
$router->route($uri);
