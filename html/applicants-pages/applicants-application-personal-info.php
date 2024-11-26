<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Personal information</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/application.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="application-content-container">
        <form id="personal-info-form" class="application-form">
          <!--Container for Category and Personal Info-->
          <div class="application-form-main-container">
            <!--Category Container-->
            <div class="application-form-content-first-row">
              <label>Programang nais mapabilang</label>
              <select id="category-dropdown" required>
                <option value="" disabled selected>Select a category</option>
                <option value="os-private">OS PRIVATE</option>
                <option value="suc-lc">SUC's / LC's</option>
                <option value="shs-public">SHS PUBLIC</option>
                <option value="shs-private">SHS PRIVATE</option>
              </select>
            </div>

            <!--APPLICATION PERSONAL INFO CONTAINER-->
            <div class="application-form-content-second-row">
              <label style="margin-left: 2rem">Personal Information</label>
              <!--FIRST ROW-->
              <div
                class="personal-info-row"
                style="display: flex; gap: 10px; flex-direction: row"
              >
                <input
                  type="text"
                  id="given-name"
                  placeholder="Given name"
                  required
                />
                <input
                  type="text"
                  id="middle-name"
                  placeholder="Middle name"
                  required
                />
                <input
                  type="text"
                  id="last-name"
                  placeholder="Last name"
                  required
                />
                <input type="number" id="age" placeholder="Age" required />
              </div>

              <!--SECOND ROW-->
              <div
                class="personal-info-row"
                style="
                  display: flex;
                  gap: 10px;
                  margin-top: 10px;
                  flex-direction: row;
                "
              >
                <input
                  type="date"
                  id="date-of-birth"
                  placeholder="Date of Birth"
                />
                <input
                  type="text"
                  id="school-name-field"
                  placeholder="Paaralang pinapasukan"
                />
                <select id="grade-level">
                  <option value="" disabled selected>Grade Level</option>
                  <option value="1">High school</option>
                  <option value="2">Senior high school</option>
                  <option value="3">College</option>
                </select>
              </div>
            </div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 1 of 5</p>

            <div>
              <a
                class="application-form-back-button"
                href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application.php"
              >
                <img src="/sad-final-project/sad-final-project/img/icons/arrow-left-icon.svg" alt="" />
                Back
              </a>

              <input
                type="submit"
                value="Next"
                class="application-form-next-button"
              />
            </div>
          </div>
        </form>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#applicant-application-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
</script>

    <script>
      function saveSelectedCategory() {
        const categoryDropdown = document.getElementById("category-dropdown");
        const selectedCategory = categoryDropdown.value;

        if (selectedCategory) {
          localStorage.setItem("selectedCategory", selectedCategory);
        } else {
          alert("Please select a category before proceeding.");
        }
      }

      document
        .getElementById("personal-info-form")
        .addEventListener("submit", function (event) {
          event.preventDefault(); 

          if (this.checkValidity()) {
            saveSelectedCategory(); // Save category
            window.location.href =
              "/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-contact-info.php";
          } else {
            this.reportValidity();
          }
        });
    </script>
  </body>
</html>
