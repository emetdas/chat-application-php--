const searchBar = document.querySelector(".searchInput");
const searchBtn = document.querySelector(".searchbtn");
const userList = document.querySelector(".users .users-list");
searchBtn.addEventListener("click", () => {
  searchBar.classList.toggle("active");
  searchBtn.classList.toggle("active");
  searchBar.focus();
    searchBar.value = "";
});
searchBar.onkeyup = () => {
  let searchTeam = searchBar.value;
  if (searchTeam != "") {
    searchBar.classList.add("active");
  } else {
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        userList.innerHTML = data;
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTeam=" + searchTeam);
};
setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        if (!searchBar.classList.contains("active")) {
          userList.innerHTML = data;
        }
      }
    }
  };
  xhr.send();
}, 500);
