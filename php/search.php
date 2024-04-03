<?php 
    session_start();
    include_once "config.php";
    $sender_id = $_SESSION['unique_id'];
    // Escape special characters, if any
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $query = mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id = {$sender_id} AND (username LIKE '%{$searchTerm}%')");
    if (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    } else {
        $output .= "No user was found!";
    }
    echo $output;
?>