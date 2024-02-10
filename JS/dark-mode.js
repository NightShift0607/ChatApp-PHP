// Toggle the Dark Mode
const chk = document.querySelector("#dark-chk");

chk.addEventListener("click", () => {
  document.body.classList.toggle("dark-theme");
  let theme = chk.value;
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/dark.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      console.log(data);
    }
  };
  //   Sending theme data to php thorugh ajax
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("theme=" + theme);
});
