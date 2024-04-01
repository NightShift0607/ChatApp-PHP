<?php 
    session_start();
    if (isset($_SESSION['unique_id'])) {
        include_once "config.php";
        $delete_id = mysqli_real_escape_string($conn, $_GET['delete_id']);
        if (isset($delete_id)) {    // if delete id is set
            $query = mysqli_query($conn, "DELETE FROM users WHERE unique_id = {$delete_id}");
            if ($query) {
                session_unset();
                session_destroy();
                header("location: ../login.php");
            }
        }
    } else {
        header("location: ../login.php");
    }
?>