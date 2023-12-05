<?php
session_start(); // Start or resume the session

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or another appropriate location
header("Location:/APMS/Login/loging_page/index.php"); // Change "login.php" to the actual login page URL
exit();
