<?php 
while ($row = mysqli_fetch_assoc($query)) {
    $sql = "SELECT * FROM messages WHERE (receiver_msg_id = {$row['unique_id']} OR sender_msg_id = {$row['unique_id']}) 
    AND (sender_msg_id = {$sender_id} OR receiver_msg_id = {$sender_id}) ORDER BY msg_id DESC LIMIT 1";
    $query2 = mysqli_query($conn, $sql);
    $row2 = mysqli_fetch_assoc($query2);
    if (mysqli_num_rows($query2) > 0) {
        $result = $row2['msg'];
    } else {
        $result = "Not yet started Chatting";
    }

    // trimming message length upto 28 characters to show perfectly
    (strlen($result) > 28) ? $msg = substr($result, 0, 26).'...' : $msg = $result;
    // adding you: text before msg
    if(isset($row2['sender_msg_id'])){
        ($sender_id == $row2['sender_msg_id']) ? $you = "You: " : $you = "";
    }else{
        $you = "";
    }
    // check wheather user is online or offline
    ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
    
    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="images/'. $row['img'] .'"/>
                    <div class="details">
                        <span>'. $row["username"] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fa-solid fa-circle"></i></div>
                </a>';
}
?>