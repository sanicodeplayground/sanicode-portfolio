$(document).ready(function () {
  // Get the current year
  let currentYear = new Date().getFullYear();

  // Update the year in the footer
  $("#year").text(currentYear);
});
