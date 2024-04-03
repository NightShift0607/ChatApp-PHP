<?php 
  session_start();
  if (isset($_SESSION['unique_id'])) {
    header("location: users.php");  // if session is not set then go directly to login page
  }
?>

<?php 
include_once "header.php"; 
include_once "dark-style.php"; 
?>