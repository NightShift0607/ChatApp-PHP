<?php 
  session_start();
  if (isset($_SESSION['unique_id'])) {
    header("location: users.php");  // if session is not set then go directly to login page
  }
?>

<?php include_once "header.php"; ?>
  <style>
    .sun {
        font-size: 2em;
        position: absolute;
        color: #ccc;
        filter: drop-shadow(0 0 2px rgba(225, 225, 225, 0.5));
        transition: 1s ease;
        transform: scale(0);
    }

    #dark-chk:checked ~ .sun {
        transition-delay: 0.8s;
        transform: scale(1) rotate(360deg);
    }

    .moon {
        font-size: 2em;
        color: #666;
        filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.5));
        transition: 1s ease;
        transition-delay: 0.8s;
    }

    #dark-chk:checked ~ .moon {
        transition-delay: 0s;
        transform: rotate(360deg) scale(0);
    }
  </style>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>
          <h1>ChitChatSphere</h1>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
        </header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" />
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your Email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter new Password" />
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" />
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Already signed up? <a href="login.php">Login now</a></div>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/password-show.js"></script>
    <script src="JS/signup.js"></script>
  </body>
</html>
