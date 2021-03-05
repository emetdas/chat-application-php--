const searchBar = document.querySelector(".searchInput");
const searchBtn = document.querySelector(".searchbtn");
searchBtn.addEventListener("click", () => {
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
});
