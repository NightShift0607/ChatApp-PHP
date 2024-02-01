var chk = document.querySelector("#dark-chk");
chk.addEventListener("click", function () {
  document.body.classList.toggle("dark-theme");
});

// Toggle the submenu when clicking on the button

var menuBtn = document.querySelector("#icon");
var menu = document.querySelector("#submenu");
menuBtn.addEventListener("click", function () {
  menu.classList.toggle("open-menu");
});
