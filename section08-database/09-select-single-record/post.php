<?php

require 'database.php';

// the $_GET superglobal can be used to fetch query parameters from URL
$id = $_GET['id'] ?? null;

if (!$id) {

  // redirects the user back to index.php
  /// example of a basic redirect with PHP
  header('Location: index.php');
  exit;
}

// bad approach, prone to sql injections
// $sql = 'SELECT * FROM posts WHERE id = ' . $id;

// better approach - prevents straight injections by converting arguments to strings
$sql = 'SELECT * FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$params = ['id' => $id];
$stmt->execute($params);

// fetches a single record with pdo
$post = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title><?= $post['title'] ?> </title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">My Blog</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="md my-4">
      <div class="rounded-lg shadow-md">
        <div class="p-4">
          <h2 class="text-xl font-semibold"><?= $post['title'] ?></h2>
          <p class="text-gray-700 text-lg mt-2 mb-5"><?= $post['body'] ?></p>
          <a href="index.php">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>