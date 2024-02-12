<?php
    session_start();
    include_once "config.php";
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking Whether no empty fields are present or not 
    if (!empty($username)  && !empty($email) && !empty($password)) {
        // Checking whether username is already exist or not
        $query = mysqli_query($conn,"SELECT username FROM users WHERE username = '{$username}'");
        if (mysqli_num_rows($query) > 0) {
            echo "This $username already exist!";
        } else {
            // Checking Whether email is valid or not
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //  Query to check whether user already exists in the database or not
                $query2 = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
                if (mysqli_num_rows($query2) > 0) {
                    echo "This $email already exist!!";
                } else {
                    // Checking Whether file was uploaded or not
                    if (isset($_FILES['image'])) { // if file is uploaded
                        $img_name = $_FILES['image']['name'];  // getting image name
                        $tmp_name = $_FILES['image']['tmp_name'];  // temporary name used to save or move file
                        $img_explode = explode('.', $img_name);
                        $img_ext = end($img_explode);    // extension of the image
                        $allowed_types = ['jpg','jpeg','png'];   // allowed extensions
                        if (in_array($img_ext, $allowed_types) === true) { // uploaded file extension should match with allowed extension
                            $time = time();  // for image to have unique name I will rename current time of upload
                            // moving uploaded image to a specific folder and changing its name by adding uploaded time before image name
                            $new_img_name = $time.$img_name;
                            if (move_uploaded_file($tmp_name, "../images/".$new_img_name)) {  // if image moved successfully
                                $status = "Active now"; // after signup user's status will be active now
                                $random_id = rand(time(), 10000000); // creating random id for user
                                // insert user data in database
                                $query3 = mysqli_query($conn,"INSERT INTO users (unique_id, username, email, password, img, status, theme) VALUES ({$random_id}, '{$username}', '{$email}', '{$password}', '{$new_img_name}', '{$status}', 'Light')");
                                if ($query3) {  // data inserted successful
                                    $query4 = mysqli_query($conn,"SELECT * FROM users WHERE email = '{$email}'");
                                    if (mysqli_num_rows($query4) > 0) {
                                        $row = mysqli_fetch_assoc($query4);
                                        $_SESSION['unique_id'] = $row['unique_id']; // using this session to use in other php files
                                        echo "Success";
                                    }
                                } else {
                                    echo "Something went wrong!";
                                }
                            }
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
        }
    } else {
        echo "All input fields are required!";
    }
?>