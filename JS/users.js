setInterval(() => {
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("GET", "php/users.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      if (!searchBar.classList.contains("active")) {
        // if active is there then only add data
        usersList.innerHTML = data;
      } else {
      }
    }
  };
  xhttp.send();
}, 500); // Function will run after 500ms
