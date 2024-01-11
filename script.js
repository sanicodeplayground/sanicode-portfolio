$(document).ready(function () {
  // Get the current year
  let currentYear = new Date().getFullYear();

  // Update the year in the footer
  $("#year").text(currentYear);
});

//Have a toggle hamburger menu
const burger = document.querySelector("#burger");
const menu = document.querySelector("#menu");

burger.addEventListener("click", () => {
  if (menu.classList.contains("hidden")) {
    menu.classList.remove("hidden");
    menu.classList.add("navWrapperMobile");
    
  } else {
    menu.classList.add("hidden");
    menu.classList.remove("navWrapperMobile");
  }
});