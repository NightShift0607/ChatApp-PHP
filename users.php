<?php include_once "header.php"; ?>
  <body>
    <div class="wrapper">
      <section class="users">
        <header>
          <div class="content">
            <img src="images/img.jpg" alt="Profile" />
            <div class="details">
              <span>Rajat Gupta</span>
              <p>Active now</p>
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
          <input type="text" placeholder="Enter name to search..." />
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="users-list">
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
          <a href="#">
            <div class="content">
              <img src="images/img.jpg" alt="" />
              <div class="details">
                <span>Rajat Gupta</span>
                <p>This is test message</p>
              </div>
            </div>
            <div class="status-dot"><i class="fa-solid fa-circle"></i></div>
          </a>
        </div>
      </section>
    </div>
    <script src="JS/menu-toggle.js"></script>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/searchbar-show.js"></script>
  </body>
</html>
