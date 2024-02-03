// Hide - Unhide toggle for settings page

changeBtn = document.querySelectorAll(".settings form input[type = 'button']");
hideArea = document.querySelectorAll(".settings form .hide:not(.button)");
saveBtn = document.querySelectorAll(".settings form .button.hide");

for (let i = 0; i < changeBtn.length; i++) {
  changeBtn[i].addEventListener("click", () => {
    hideArea[i].classList.toggle("unhide");
    saveBtn[i].classList.toggle("unhide");
  });
}
