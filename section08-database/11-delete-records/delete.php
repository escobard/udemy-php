<?php
require 'database.php';

// check if user landed on this page by clicking on post.php delete button
$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '' === 'delete');

if ($isDeleteRequest) {
  $id = $_POST['id'];

  // prepare SQL to delete post
  $sql = 'DELETE FROM posts WHERE id=:id';
  $stmt = $pdo->prepare($sql);
  $params = [
    'id' => $id
  ];
  $stmt->execute($params);

  header('Location: index.php');
  exit;
}
