const chatForm = document.querySelector(".typing-area");
const inputField = document.querySelector(".input-field");
const sendBtn = document.querySelector("button");
const chatBox = document.querySelector(".chat-box");
const rStatus = document.querySelector("#status");
const receiverId = document.querySelector("#receiver_id").value;

chatForm.addEventListener("submit", (e) => {
  e.preventDefault(); // Preventing the default submission of the form when click on the button
});

// Handle Status For Online/Offline Users
setInterval(() => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/status-return.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      rStatus.innerHTML = data;
    }
  };
  //   Sending search data to php thorugh ajax
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("receiver_id=" + receiverId);
}, 500); // Function will run after 500ms

// Sends Chat Message To The Server
sendBtn.addEventListener("click", () => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/insert-chat.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      inputField.value = ""; // text field should be empty after sending message
      scrollBottom();
    }
  };
  //   Sending form data to php thorugh ajax
  let formData = new FormData(chatForm); // new object for form data
  xhttp.send(formData); //sending the form data to php
});

chatBox.addEventListener("mouseenter", () => {
  chatBox.classList.add("active");
});

chatBox.addEventListener("mouseleave", () => {
  chatBox.classList.remove("active");
});

// Display the chat messages from server
setInterval(() => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/get-chat.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      chatBox.innerHTML = data;
      if (!chatBox.classList.contains("active")) {
        // if active class does not exist in chat box then automatic scroll won't work
        scrollBottom();
      }
    }
  };
  //   Sending form data to php thorugh ajax
  let formData = new FormData(chatForm); // new object for form data
  xhttp.send(formData); //sending the form data to php
}, 500); // Function will run after 500ms

function scrollBottom() {
  chatBox.scrollTop = chatBox.scrollHeight;
}
