<?php
    session_start();
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($email) && !empty($password)) {
        // check entered data exist or not in database
        $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'");
        if (mysqli_num_rows($query) > 0) {  // if users credentials match
            $row = mysqli_fetch_assoc($query);
            $_SESSION['unique_id'] = $row['unique_id']; // using this session to use in other php files
            echo "Success";
        } else {
            echo "Email or Password is invalid!";
        }
    } else {
        echo "All fields are required!";
    }
?>