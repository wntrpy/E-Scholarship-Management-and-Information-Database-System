function openPopup(id) {
  document.querySelector(".overlay").style.display = "block";
  document.querySelector(id).style.visibility = "visible";
}

function closePopup(id) {
  document.querySelector(".overlay").style.display = "none";
  document.querySelector(id).style.visibility = "hidden";
}


/***************************************************************************************************************/
/***** MY PROFILE DROW DOWN ************************************************************************************/
/***************************************************************************************************************/

function toggleDropDown(id) {
  const dropdown = document.querySelector(id);

  if (dropdown.style.visibility === "visible") {
    dropdown.style.visibility = "hidden";
  } else {
    dropdown.style.visibility = "visible";
  }
}

document.addEventListener("click", function (event) {
  const dropdown = document.getElementById("dropdown");
  const button = document.querySelector(".sidebar-user-profile");

  if (dropdown.style.visibility === "visible" && !dropdown.contains(event.target) && !button.contains(event.target)) {
    dropdown.style.visibility = "hidden";
  }
});


