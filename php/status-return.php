<?php 
    include_once "config.php";
    $user_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
    $query = mysqli_query($conn,"SELECT status FROM users WHERE unique_id = {$user_id}");
    $row = mysqli_fetch_array($query);
    echo $row['status'];
?>