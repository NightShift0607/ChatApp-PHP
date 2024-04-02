<?php 
  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");  // if session is not set then go directly to login page
  }
?>

<?php include_once "header.php"; ?>
<?php    // Code to fetch data from database
  include_once "php/config.php";
  $query = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
  }
  include_once "dark-style.php"; 
?>