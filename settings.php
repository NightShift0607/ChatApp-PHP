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
      <section class="form settings">
        <header>
          <h1>ChitChatSphere</h1>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
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
