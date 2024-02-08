<?php 
  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");  // if session is not set then go directly to login page
  }
?>

<?php include_once "header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
          <?php    // Code to fetch data from database
            include_once "php/config.php";
            $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
            $query = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$user_id}");
            if (mysqli_num_rows($query) > 0) {
              $row = mysqli_fetch_assoc($query);
            }
          ?>
          <a href="users.php" class="back-icon"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
          <img src="images/<?php echo $row['img']; ?>" alt="Profile" />
          <div class="details full">
            <span><?php echo $row['username']; ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
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
