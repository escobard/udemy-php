<?php

// accesses existing session for the user (if it exists)
session_start();

if (isset($_SESSION['name'])) {
  echo $_SESSION['name'];
} else {
  echo 'Name is not set';
}
