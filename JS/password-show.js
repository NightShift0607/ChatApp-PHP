// Toggle to make password visible and vice-versa

const passField = document.querySelector(
  ".form .field input[type = 'password']"
);
const passToggleBtn = document.querySelector(".form .field i");

passToggleBtn.addEventListener("click", () => {
  if (passField.type == "password") {
    passField.type = "text";
    passToggleBtn.classList.add("active");
  } else {
    passField.type = "password";
    passToggleBtn.classList.remove("active");
  }
});
