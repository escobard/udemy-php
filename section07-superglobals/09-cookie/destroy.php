<?php

// destroys a cookie with PHP
// this logic does not work on chrome, only on mozilla
setcookie('username', '', time() - 3600, '/');

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>

  <p>
    Your cookie has been deleted. <a href="page.php">Go to page.php</a>
  </p>

</body>

</html>