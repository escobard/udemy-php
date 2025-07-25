<?php

// imports all the content from a specific file
require '../helpers.php';

require basePath('Router.php');

$router = new Router();
$routes = require basePath('routes.php');

// grabs the request URL from PHP $_SERVER superglobal
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
