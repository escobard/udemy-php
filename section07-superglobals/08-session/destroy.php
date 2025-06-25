<?php

// accesses existing session for the user (if it exists)
// this code is not working on chrome (some additional caching is in place), only works on firefox
session_start();

// removes cookie if it exists
unset($_SESSION['name']);

// destroys existing cookie for the user - most common with auth mechanisms
session_destroy();

echo 'Session destroyed';
