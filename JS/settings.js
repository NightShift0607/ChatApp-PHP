// Hide - Unhide toggle for settings page

const changeBtn = document.querySelectorAll(
  ".settings form input[type = 'button']"
);
const hideArea = document.querySelectorAll(".settings form .hide:not(.button)");
const saveBtn = document.querySelectorAll(".settings form .button.hide");
const form = document.querySelectorAll("form");
const errorTxt = document.querySelector(".error-txt");
const dataSend = document.querySelectorAll(".send");

for (let i = 0; i < changeBtn.length; i++) {
  changeBtn[i].addEventListener("click", () => {
    hideArea[i].classList.toggle("unhide");
    saveBtn[i].classList.toggle("unhide");
  });
}

for (let i = 0; i < form.length; i++) {
  form[i].addEventListener("submit", (e) => {
    e.preventDefault(); // Preventing the default submission of the form when click on the button
  });
}

for (let i = 0; i < changeBtn.length - 1; i++) {
  saveBtn[i].addEventListener("click", () => {
    let dataType = dataSend[i].name;
    let data = dataSend[i].value;
    var xhttp = new XMLHttpRequest(); //XML object created
    xhttp.open("POST", "php/settings.php", true);
    xhttp.onload = () => {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
        let data = xhttp.response;
        errorTxt.style.display = "block";
        errorTxt.innerHTML = data;
      }
    };
    //   Sending settings data to php through ajax
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("type=" + dataType + "&content=" + data);
  });
}

saveBtn[3].addEventListener("click", () => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/image-update.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      errorTxt.style.display = "block";
      errorTxt.innerHTML = data;
    }
  };
  //   Sending form data to php thorugh ajax
  let formData = new FormData(form[3]); // new object for form data
  xhttp.send(formData); //sending the form data to php
});
