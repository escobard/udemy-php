<?php
// Add a query parameter to the URL in the browser's address bar:
// http://localhost:8000/?name=John

// returns array of available URL query parameters
var_dump($_GET);

// returns only a specific url query parameter (if it exists)
/// this syntax is very dangerous, code can be passed into the URL which is then executed at runtime
//// for example, a JS script can be passed into the url query parameter of 'name' which is then executed on line 11
var_dump($_GET['name']);
