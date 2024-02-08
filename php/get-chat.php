<?php
    session_start();
    if (isset($_SESSION['unique_id'])) {
        include_once "config.php";
        $sender_id = mysqli_real_escape_string($conn, $_POST['sender_id']);
        $receiver_id = mysqli_real_escape_string($conn, $_POST['receiver_id']);
        $output = "";

        $sql = "SELECT * FROM messages
                    LEFT JOIN users ON users.unique_id = messages.sender_msg_id
                    WHERE (receiver_msg_id = {$receiver_id} AND sender_msg_id = {$sender_id}) 
                    OR (receiver_msg_id = {$sender_id} AND sender_msg_id = {$receiver_id}) ORDER BY msg_id ASC";
        $query = mysqli_query($conn, $sql);
        if (mysqli_num_rows($query) > 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['sender_msg_id'] === $sender_id) {     // if this is equal that means he is sender
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'. $row['msg'] .'</p>
                                    </div>
                                </div>';
                } else {    // he is receiver
                    $output .= '<div class="chat incoming">
                                    <img src="images/'. $row['img'] .'" alt="pic" />
                                    <div class="details">
                                        <p>'. $row['msg'] .'</p>
                                    </div>
                                </div>';
                }
                
            }
            echo $output;
        }
    }else {
        header("../login.php");
    }
?>