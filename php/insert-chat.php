<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        include_once "config.php";
        // Escape special characters, if any
        $sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
        $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        if (!empty($message)) {
            $query = mysqli_query($conn, "INSERT INTO messages (receiver_msg_id, sender_msg_id, msg) VALUES ({$receiver_id}, {$sender_id}, '{$message}')") or die();
        }
    }else {
        header("../login.php");
    }
?>