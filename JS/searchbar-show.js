// Search Bar show Toggle

const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
const usersList = document.querySelector(".users .users-list");

searchBtn.addEventListener("click", () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
  searchBar.value = "";
});

searchBar.addEventListener("keyup", () => {
  let searchTerm = searchBar.value;
  if (searchTerm != "") {
    searchBar.classList.add("active"); // if active is added to searchBar then setinterval ajax will not run
  } else {
    searchBar.classList.remove("active");
  }
  var xhttp = new XMLHttpRequest(); //XML object created
  xhttp.open("POST", "php/search.php", true);
  xhttp.onload = () => {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      let data = xhttp.response;
      usersList.innerHTML = data;
    }
  };
  //   Sending search data to php thorugh ajax
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("searchTerm=" + searchTerm);
});
