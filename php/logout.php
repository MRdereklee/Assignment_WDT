<?php
//logout user account
session_start();
echo "<script>alert('You have already logged out. Thank you ".$_SESSION['user']." ! ')</script>";
// Remove all session variables
session_unset();

// Destroy the session
session_destroy();
echo "<script>window.location.href='../home.php';</script>";
?>
