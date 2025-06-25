<?php
// Common server variables:
/// global variables are persisted between refreshes

// determines what request method was last used (eg, GET/POST)
$requestMethod = $_SERVER['REQUEST_METHOD'];
// determines the protocol - HTTP/HTTPS etc
$serverProtocol = $_SERVER['SERVER_PROTOCOL'];
// name of the server - in this case localhost
$serverName = $_SERVER['SERVER_NAME'];
// server port
$serverPort = $_SERVER['SERVER_PORT'];
// software of server, since it's hosted with PHP, it will return PHP version
$serverSoftware = $_SERVER['SERVER_SOFTWARE'];
// return server admin if there is an admin
$serverAdmin = $_SERVER['SERVER_ADMIN'];
// returns root path
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
// path of running script
$scriptFilename = $_SERVER['SCRIPT_FILENAME'];
// name of the file running this code
$scriptName = $_SERVER['SCRIPT_NAME'];

$phpSelf = $_SERVER['PHP_SELF'];
// IP address of requester
$remoteAddr = $_SERVER['REMOTE_ADDR'];
// type of connection being used - keep-alive / closed
$connection = $_SERVER['HTTP_CONNECTION'];
// server name + server post
$host = $_SERVER['HTTP_HOST'];
// restores URL of referring back (linkbacks/linkforward)
$referer = $_SERVER['HTTP_REFERER'];
// returns browser and OS of the user
$userAgent = $_SERVER['HTTP_USER_AGENT'];
// URL query(s)
$queryString = $_SERVER['QUERY_STRING'];
// returns the full URI of the request
$requestUri = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $connection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $referer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $userAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>
</body>

</html>