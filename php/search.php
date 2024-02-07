<?php 
    include_once "config.php";
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $query = mysqli_query($conn,"SELECT * FROM users WHERE username LIKE '%{$searchTerm}%'");
    if (mysqli_num_rows($query) > 0) {
        include_once "data.php";
    } else {
        $output .= "No user was found!";
    }
    echo $output;
?>