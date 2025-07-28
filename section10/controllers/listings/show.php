<?php

$config = require basePath('config/db.php');

$db = new Database($config);

// grab url id by using superglobal
$id = $_GET['id'] ?? '';

// prepare query arguments to prevent injections
$params = [
  'id' => $id
];

$listing = $db->query('SELECT * FROM workopia.listings WHERE id = :id', $params)->fetch();

loadView('listings/show', ['listing' => $listing]);
