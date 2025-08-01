<?php

// imports all the content from a specific file
require '../helpers.php';

require basePath('Framework/Router.php');
require basePath('Framework/Database.php');

// needs to be instantiated prior to getting routes.php, because routes.php requires $router variable to contain valid router class
$router = new Router();
$routes = require basePath('routes.php');

// grabs the request URL from PHP $_SERVER superglobal
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Route the request
$router->route($uri, $method);
