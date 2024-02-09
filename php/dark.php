<?php
    session_start();
    include_once "config.php";
    $user_id = $_SESSION['unique_id'];
    $theme = mysqli_real_escape_string($conn, $_POST['theme']);
    $query = mysqli_query($conn,"UPDATE users SET theme='{$theme}' WHERE unique_id = {$user_id}");
    if ($query) {
        echo "success";
    }
?>