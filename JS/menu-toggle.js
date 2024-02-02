// Toggle the submenu when clicking on the button

var menuBtn = document.querySelector("#icon");
var menu = document.querySelector("#submenu");
menuBtn.addEventListener("click", () => {
  menu.classList.toggle("open-menu");
});
