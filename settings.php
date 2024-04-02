<?php 
  include_once "extra.php";
?>

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
            <input type="text" name="username" class="send" placeholder="Username" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change Your Email" />
          </div>
          <div class="field input hide">
            <input type="text" name="email" class="send" placeholder="Enter new Email" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#">
          <div class="field button">
            <input type="button" value="Change Your Password" />
          </div>
          <div class="field input hide">
            <input type="password" name="password" class="send" placeholder="Enter new Password" />
            <i class="fa-solid fa-eye" id="showPass"></i>
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <form action="#" enctype="multipart/form-data">
          <div class="field button">
            <input type="button" value="Change Your Profile Pic" />
          </div>
          <div class="field image hide">
            <input type="file" name="img" />
          </div>
          <div class="field button save hide">
            <input type="submit" value="Save Changes" />
          </div>
        </form>
        <a href="php/delete.php?delete_id=<?php echo $row['unique_id'] ?>">
          <input type="button" id="delete" value="Delete Your Account" />
        </a>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/password-show.js"></script>
    <script src="JS/settings.js"></script>
  </body>
</html>
