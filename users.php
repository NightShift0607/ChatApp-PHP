<?php 
  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");  // if session is not set then go directly to login page
  }
?>

<?php include_once "header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="users">
        <header>
          <?php    // Code to fetch data from database
            include_once "php/config.php";
            $query = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if (mysqli_num_rows($query) > 0) {
              $row = mysqli_fetch_assoc($query);
            }
          ?>
          <div class="content">
            <img src="images/<?php echo $row['img'] ?>" alt="Profile" />
            <div class="details">
              <span><?php echo $row['username'] ?></span>
              <p><?php echo $row['status'] ?></p>
            </div>
          </div>
          <div class="menu-wrap">
            <i class="fa-solid fa-ellipsis-vertical icon" id="icon"></i>
            <div class="submenu-wrap" id="submenu">
              <div class="submenu">
                <div class="dark-toggle">
                  <label id="dark-label" class="submenu-link">
                    <input type="checkbox" id="dark-chk" />
                    <i class="fa-solid fa-sun sun"></i>
                    <i class="fa-solid fa-moon moon"></i>
                  </label>
                  <label for="dark-chk" id="dark-txt">Dark Mode</label>
                </div>
                <a href="#" class="submenu-link">
                  <i class="fa-solid fa-gear"></i>
                  <p>Settings</p>
                </a>
                <a href="#" class="submenu-link">
                  <i class="fa-solid fa-circle-info"></i>
                  <p>About and Support</p>
                </a>
                <a href="#" class="submenu-link">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <p>logout</p>
                </a>
              </div>
            </div>
          </div>
        </header>
        <div class="search">
          <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Enter username to search..." />
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="users-list">
          
        </div>
      </section>
    </div>
    <script src="JS/menu-toggle.js"></script>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/searchbar-show.js"></script>
    <script src="JS/users.js"></script>
  </body>
</html>
