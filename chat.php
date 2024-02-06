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
      <section class="chat-area">
        <header>
          <a href="#" class="back-icon"
            ><i class="fa-solid fa-arrow-left"></i
          ></a>
          <img src="images/img.jpg" alt="Profile" />
          <div class="details full">
            <span>Rajat Gupta</span>
            <p>Active now</p>
          </div>
          <label id="dark-label">
            <input type="checkbox" id="dark-chk" />
            <i class="fa-solid fa-sun sun"></i>
            <i class="fa-solid fa-moon moon"></i>
            <span class="toggle"></span>
          </label>
        </header>
        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img.jpg" alt="pic" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img.jpg" alt="pic" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img.jpg" alt="pic" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="images/img.jpg" alt="pic" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </div>
        </div>
        <form action="#" class="typing-area">
          <input type="text" placeholder="Type a message here..." />
          <button><i class="fa-solid fa-paper-plane"></i></button>
        </form>
      </section>
    </div>
    <script src="JS/dark-mode.js"></script>
  </body>
</html>