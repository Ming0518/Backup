<?php
// Start session if not already started
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the index page after logout
header('Location: index.html');
exit;
?>
