<?php 
while ($row = mysqli_fetch_assoc($query)) {
    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="images/'. $row['img'] .'"/>
                    <div class="details">
                        <span>'. $row["username"] .'</span>
                        <p>This is test message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
                </a>';
}
?>

<!-- <a href="chat.php?user_id='. $row['unique_id'] .'">  This line makes personalised chat page url to identify chats -->