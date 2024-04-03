<?php
    session_start();
    include_once "config.php";
    // Escape special characters, if any
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($email) && !empty($password)) {
        // check entered data exist or not in database
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($query) > 0) {  // if users credentials match
            $row = mysqli_fetch_assoc($query);
            $status = "Active now";
            $query2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
            if ($query2) {
                $_SESSION['unique_id'] = $row['unique_id']; // using this session to use in other php files
                echo "Success";
            }
            else {
                echo "Something went wrong!";
            }
        } else {
            echo "Email or Password is invalid!";
        }
    } else {
        echo "All fields are required!";
    }
?>