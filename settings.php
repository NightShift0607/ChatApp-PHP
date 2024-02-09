<?php 
  session_start();
  if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");  // if session is not set then go directly to login page
  }
?>

<?php include_once "header.php"; ?>
<?php    // Code to fetch data from database
  include_once "php/config.php";
  $query = mysqli_query($conn,"SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
  }
?>
<?php include_once "dark-style.php"; ?>
  <body class="<?php echo ($row['theme'] == "Dark") ? "dark-theme" : "light-theme" ?>">
    <div class="wrapper">
      <section class="form settings">
        <header>
          <a href="users.php" class="back-icon"
              ><i class="fa-solid fa-arrow-left"></i></a>
          <h1>ChitChatSphere</h1>
          <label id="dark-label">
            <input type="checkbox" value="<?php echo ($row['theme'] == "Dark") ? "Light" : "Dark" ?>" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
        </header>
        <div class="error-txt">This is an error text!</div>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change Your Username" />
          </div>
          <div class="field input hide">
            <input type="text" placeholder="Username" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change you Email" />
          </div>
          <div class="field input hide">
            <input type="text" placeholder="Enter new Email" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change you Password" />
          </div>
          <div class="field input hide">
            <input type="password" placeholder="Enter new Password" />
            <i class="fa-solid fa-eye" id="showPass"></i>
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change you Profile Pic" />
          </div>
          <div class="field image hide">
            <input type="file" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/password-show.js"></script>
    <script src="JS/hide-unhide.js"></script>
  </body>
</html>
