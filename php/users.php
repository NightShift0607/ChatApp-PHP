<?php 
    session_start();
    include_once "config.php";
    $query = mysqli_query($conn,"SELECT * FROM users");
    $output = "";
    if (mysqli_num_rows($query) == 1) {
        $output .= "No users are available to chat";
    } elseif (mysqli_num_rows($query) > 1) {
        include_once "data.php";
    }
    echo $output;

?>