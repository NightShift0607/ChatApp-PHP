const form = document.querySelector(".login form");
const submitBtn = document.querySelector(".button input");
const errorText = document.querySelector(".error-txt");

form.addEventListener("submit", (e) => {
  e.preventDefault(); // Preventing the default submission of the form when click on the button
});

submitBtn.addEventListener("click", () => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/login.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      if (data === "Success") {
        location.href = "users.php";
      } else {
        errorText.style.display = "block";
        errorText.innerHTML = data;
      }
    }
  };
  //   Sending form data to php thorugh ajax
  let formData = new FormData(form); // new object for form data
  xhttp.send(formData); //sending the form data to php
});
