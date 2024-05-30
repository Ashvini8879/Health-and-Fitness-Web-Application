<?php
session_start();

// Destroying all session data
session_destroy();

// Redirecting to login page
header("Location: login.php");
exit;
?>