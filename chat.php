<?php 
  include_once "extra.php";
?>

  <body class="<?php echo ($row['theme'] == "Dark") ? "dark-theme" : "light-theme" ?>">
    <div class="wrapper">
      <section class="chat-area">
        <?php include_once "loader.php"; ?>
        <header>
          <?php    // Code to fetch data from database
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $query2 = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$user_id}");
            if (mysqli_num_rows($query2) > 0) {
              $row2 = mysqli_fetch_assoc($query2);
            }
          ?>
          <a href="users.php" class="back-icon"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
          <img src="images/<?php echo $row2['img']; ?>" alt="Profile" />
          <div class="details full">
            <span><?php echo $row2['username']; ?></span>
            <p id="status"><?php echo $row2['status']; ?></p>
          </div>
        </header>
        <div class="chat-box"></div>
        <form action="#" class="typing-area" autocomplete="off">
          <input type="text" name="sender_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
          <input type="text" name="receiver_id" value="<?php echo $user_id; ?>" hidden>
          <input type="text" name="message" class="input-field" placeholder="Type a message here..." />
          <button><i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/chat.js"></script>
  </body>
</html>
