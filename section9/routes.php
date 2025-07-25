<?php

// in PHP you can use dependencies without requiering them into the file, but the file that invokes the code must have the dependency
$router->get('/', 'controllers/home.php');
$router->get('/listings', 'controllers/listings/index.php');
$router->get('/listings/create', 'controllers/listings/create.php');
