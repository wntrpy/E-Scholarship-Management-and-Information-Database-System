<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Information</title>
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
        <form id="contact-info-form" class="application-form">
          <!--Contact Info and Permanent address-->
          <div class="application-form-main-container">
            <!--Contact information container-->
            <div class="application-form-content-first-row">
              <label>Contact Information</label>
              <div>
                <input
                  type="email"
                  id="application-email-field"
                  placeholder="qwert@gmail.com"
                  required
                />
                <input
                  type="number"
                  id="application-contact-number-field"
                  placeholder="0901001"
                  required
                />
              </div>
            </div>

            <!--PERMANENT ADDRESS-->
            <div class="application-form-content-second-row">
              <h2 style="margin-left: 1.75rem; font-size: 2rem">
                Permanent address
              </h2>
              <!--FIRST ROW-->
              <div
                class="personal-info-row"
                style="display: flex; gap: 10px; flex-direction: row"
              >
                <input
                  type="text"
                  id="application-zipcode-field"
                  placeholder="Zipcode"
                  required
                />
                <input
                  type="text"
                  id="application-city-field"
                  placeholder="City/Municipality"
                  required
                />
                <input
                  type="text"
                  id="application-province-field"
                  placeholder="Province"
                  required
                />
                <input
                  type="number"
                  id="application-barangay-field"
                  placeholder="Barangay"
                  required
                />
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
                  type="text"
                  id="application-village-field"
                  placeholder="Village/Subdivision"
                  required
                />

                <input
                  type="text"
                  id="application-unitNo-field"
                  placeholder="House no/Unit no."
                  required
                />
              </div>
            </div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 2 of 5</p>

            <div>
              <a
                class="application-form-back-button"
                href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-personal-info.php"
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
      document
        .getElementById("contact-info-form")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          if (this.checkValidity()) { 
            window.location.href =
              "/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-family-info.php";
          } else {
            
            this.reportValidity();
          }
        });
    </script>
  </body>
</html>
