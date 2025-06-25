<?php

// create a session for the user in PHP
/// this also creates a cookie in the users browser, which php uses to determine if a session exists for the user
session_start();

// saves a user's name, which is retrieved next time the user visits application
/// sessions are persisted between page visits, cool!
$_SESSION['name'] = 'John';

print_r($_SESSION);
