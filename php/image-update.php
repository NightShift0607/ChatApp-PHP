<?php
    session_start();
    include_once "config.php";
    $user_id = $_SESSION['unique_id'];

    // Checking Whether img was uploaded or not
    if (isset($_FILES['img'])) { // if file is uploaded
        $img_name = $_FILES['img']['name'];  // getting img name
        $tmp_name = $_FILES['img']['tmp_name'];  // temporary name used to save or move file
        $img_explode = explode('.', $img_name);
        $img_ext = end($img_explode);    // extension of the img
        $allowed_types = ['jpg','jpeg','png'];   // allowed extensions
        if (in_array($img_ext, $allowed_types) === true) { // uploaded file extension should match with allowed extension
            $time = time();  // for img to have unique name I will rename current time of upload
            // moving uploaded img to a specific folder and changing its name by adding uploaded time before img name
            $new_img_name = $time.$img_name;
            if (move_uploaded_file($tmp_name, "../images/".$new_img_name)) {  // if img moved successfully
                $query2 = mysqli_query($conn,"UPDATE users SET img='{$new_img_name}' WHERE unique_id = {$user_id}");
                if ($query2) {    // if data successfuly Updated
                    echo "Your image has been successfuly updated";
                }
            }
        } else {
            echo "Please Select an img file! - jpeg, jpg, png";
        }
    } else {
        echo "Please select an img file";
    }
?>