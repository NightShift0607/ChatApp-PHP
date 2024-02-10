<?php
    session_start();
    include_once "config.php";
    $user_id = $_SESSION['unique_id'];
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    if (!empty($content)) {     // checking wheather data is empty or not
        if ($type == "email") {     // checking whether entered data is email
            if (filter_var($content, FILTER_VALIDATE_EMAIL)) {       // checking wheather email format is correct
                // checking email already exist or not in database
                $query = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$content}'");
                if (mysqli_num_rows($query) > 0) {
                    echo "This $content already exist!!";
                } else {    //   if email doesnot exist then update the table
                    $query2 = mysqli_query($conn,"UPDATE users SET email='{$content}' WHERE unique_id = {$user_id}");
                    if ($query2) {    // if data successfuly Updated
                        echo "Your email has been successfuly updated";
                    }
                }
            } else {
                echo "$content is not a valid email!";
            }
        } elseif ($type == "username") {        // checking whether entered data is username
            $query = mysqli_query($conn,"SELECT username FROM users WHERE username = '{$content}'");
                if (mysqli_num_rows($query) > 0) {  // checking weather username alreday exists or not
                    echo "$content already exist!!";
                } else {    //   if username does not exist then update the table
                    $query2 = mysqli_query($conn,"UPDATE users SET username='{$content}' WHERE unique_id = {$user_id}");
                    if ($query2) {    // if data successfuly Updated
                        echo "Your username has been successfuly updated";
                    }
                }
        } else {         // Enter data is password
            $query2 = mysqli_query($conn,"UPDATE users SET password='{$content}' WHERE unique_id = {$user_id}");
                    if ($query2) {    // if data successfuly Updated
                        echo "Your password has been successfuly updated";
                    }
        }
    } else {
        echo "Please Do not leave content field empty!";
    }
?>