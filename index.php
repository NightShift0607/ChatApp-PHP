<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ChitChatSphere - A Chatting App</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
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
