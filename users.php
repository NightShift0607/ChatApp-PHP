<?php 
  include_once "extra.php";
?>

  <body class="<?php echo ($row['theme'] == "Dark") ? "dark-theme" : "light-theme" ?>">
    <div class="wrapper">
      <section class="users">
        <?php include_once "loader.php"; ?>
        <header>
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
                    <input type="checkbox" value="<?php echo ($row['theme'] == "Dark") ? "Light" : "Dark" ?>" id="dark-chk" />
                    <i class="fa-solid fa-sun sun"></i>
                    <i class="fa-solid fa-moon moon"></i>
                  </label>
                  <label for="dark-chk" id="dark-txt"><?php echo ($row['theme'] == "Dark") ? "Light" : "Dark" ?> Mode</label>
                </div>
                <a href="settings.php" class="submenu-link">
                  <i class="fa-solid fa-gear"></i>
                  <p>Settings</p>
                </a>
                <a href="about.php" class="submenu-link">
                  <i class="fa-solid fa-circle-info"></i>
                  <p>About and Support</p>
                </a>
                <a href="php/logout.php?logout_id=<?php echo $row['unique_id'] ?>" class="submenu-link">
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
    <script>
      const darkTxt = document.querySelector("#dark-txt");
      chk.addEventListener("click", () => {
      if (darkTxt.innerHTML == "Dark Mode") {
        darkTxt.innerHTML = "Light Mode";
      } else {
        darkTxt.innerHTML = "Dark Mode";
      }
    });
    </script>
  </body>
</html>
