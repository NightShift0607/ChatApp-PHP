<?php 
    session_start();
    include_once "config.php";
    $sender_id = $_SESSION['unique_id'];
    $query = mysqli_query($conn,"SELECT * FROM users WHERE NOT unique_id = {$sender_id}");
    $output = "";
    if (mysqli_num_rows($query) == 1) {
        $output .= "No users are available to chat";
    } elseif (mysqli_num_rows($query) > 1) {
        include_once "data.php";
    }
    echo $output;

?>