<?php session_start(); ?>

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
      <section class="users">
        <header>
        <a href="users.php" class="back-icon"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
          <h1>About and Support</h1>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
        </header>
        <div class="about">
          <p>
            In the realm of modern communication, the development of robust and
            user-friendly chatting applications has become imperative.
            ChitChatSphere simple chatting application meticulously crafted
            using HTML, CSS, JavaScript, PHP and Database as MySql - a
            combination that seamlessly integrates front-end and back-end
            technologies to deliver a cohesive user experience.
          </p>
          <h3>Developer</h3>
          <div class="dev">
            <img src="images/img.jpg" alt="pic" />
            <h3>Rajat Gupta</h3>
            <p>
              This Web App is developed by Rajat Gupta. A BCA student in SIU,
              Pune. The inspiration for design and working of the App is from
              pinterest and multiple sources from youtube.
            </p>
          </div>
          <h3>
            The code for this App can be found
            <a
              href="https://github.com/NightShift0607/ChatApp-PHP"
              target="_blank"
              rel="noopener noreferrer"
              >here</a
            >
          </h3>
          <h3>
            You can contact me and ask for support through various platform
          </h3>
          <div class="contact">
            <img src="images/logo.png" alt="logo" />
            <a
              href="mailto:rajatgupta0607@gmail.com"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fa-solid fa-envelope"></i>
            </a>
            <a
              href="https://github.com/NightShift0607"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fa-brands fa-github"></i>
            </a>
            <a
              href="https://www.linkedin.com/in/rajat-gupta-716a5b28b/"
              target="_blank"
              rel="noopener noreferrer"
              ><i class="fa-brands fa-linkedin"></i>
            </a>
          </div>
        </div>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
    <script src="JS/password-show.js"></script>
  </body>
</html>
