<?php 
  session_start();
  if (isset($_SESSION['unique_id'])) {
    header("location: users.php");  // if session is not set then go directly to login page
  }
?>

<?php 
include_once "header.php";
include_once "dark-style.php"; 
?>

  <body>
    <div class="wrapper">
      <section class="form login">
        <header>
          <h1>ChitChatSphere</h1>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
        </header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" name="email" placeholder="Enter your Email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your Password" />
            <i class="fa-solid fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/password-show.js"></script>
    <script src="JS/login.js"></script>
  </body>
</html>
