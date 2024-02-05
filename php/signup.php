<?php
    include_once "config.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking Whether no empty fields are present or not 
    if (!empty($username)  && !empty($email) && !empty($password)) {
        // Checking Whether email is valid or not
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //  Query to check whether user already exists in the database or not
            $query = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($query) > 0) {
                echo "This $email already exist!!";
            } else {
                // Checking Whether file was uploaded or not
                if (isset($_FILES['image'])) { // if file is uploaded
                    $img_name = $_FILES['image']['name'];  // getting image name
                    $tmp_name = $_FILES['image']['tmp_name'];  // temporary name used to save or move file
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);    // extension of the image
                    $allowed_types = ['jpg','jpeg','png'];   // allowed extensions
                    if (in_array($img_ext, $allowed_types) === true) { // uploaded file ext should match with allowed ext
                        $time = time();  // for image to have unique name i will rename current time of upload
                        $status = "Active now"; // after signup user's status will be active now 
                    } else {
                        echo "Please Select an Image file! - jpeg, jpg, png";
                    }
                } else {
                    echo "Please select an Image file";
                }
            }
        } else {
            echo "$email is not a valid email!";
        }
    } else {
        echo "All input fields are required!";
    }
    
?>