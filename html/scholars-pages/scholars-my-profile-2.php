<?php
include('../../php/showProfilePic.php');
include('scholars-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Profile Scholars</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/my-profile.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="content-container">
        <form id="profileForm">
          <h2>Family information</h2>
          <div class="family-profile-form-first-row">
            <!--===========================================================================================================================================-->
            <!--FATHER FIELDS CONTAINER -->
            <!--===========================================================================================================================================-->
            <fieldset>
              <legend>Father</legend>
              <div class="field-row">
                <div>
                  <label>Last Name</label>
                  <input
                    type="text"
                    id="father-last-name-field"
                    placeholder="Last Name"
                    required
                  />
                </div>
                <div>
                  <label>Given Name</label>
                  <input
                    type="text"
                    id="father-given-name-field"
                    placeholder="Given Name"
                    required
                  />
                </div>
                <div>
                  <label>Middle Name</label>
                  <input
                    type="text"
                    id="father-middle-name-field"
                    placeholder="Middle Name"
                    required
                  />
                </div>
                <div>
                  <label>Contact no.</label>
                  <input
                    type="text"
                    id="father-contact-no-field"
                    placeholder="Contact no."
                    required
                  />
                </div>
              </div>

              <div class="field-row" style="margin-bottom: 2rem">
                <div>
                  <label>Civil status</label>
                  <input
                    type="text"
                    id="father-civil-status-field"
                    placeholder="Civil status"
                    required
                  />
                </div>
                <div>
                  <label>Occupation</label>
                  <input
                    type="text"
                    id="father-occupation-field"
                    placeholder="Occupation"
                    required
                  />
                </div>
                <div>
                  <label>Annual gross income</label>
                  <input
                    type="text"
                    id="father-annual-gross-field"
                    placeholder="Annual gross income"
                    required
                  />
                </div>

                <div>
                  <label>Educational Attainment</label>
                  <input
                    type="text"
                    id="father-educational-attainment"
                    placeholder="Educational Attainment"
                    required
                  />
                </div>
              </div>
            </fieldset>
          </div>

          <!--===========================================================================================================================================-->
          <!--MOTHER FIELDS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="mother-profile-firt-row" style="margin-top: 1rem">
            <legend>Mother</legend>
            <div class="field-row">
              <div>
                <label>Last Name</label>
                <input
                  type="text"
                  id="mother-last-name-field"
                  placeholder="Last Name"
                  required
                />
              </div>
              <div>
                <label>Given Name</label>
                <input
                  type="text"
                  id="mother-given-name-field"
                  placeholder="Given Name"
                  required
                />
              </div>
              <div>
                <label>Middle Name</label>
                <input
                  type="text"
                  id="mother-middle-name-field"
                  placeholder="Middle Name"
                  required
                />
              </div>
              <div>
                <label>Contact no.</label>
                <input
                  type="text"
                  id="mother-contact-no-field"
                  placeholder="Contact no."
                  required
                />
              </div>
            </div>

            <div class="field-row" style="margin-bottom: 2rem">
              <div>
                <label>Civil status</label>
                <input
                  type="text"
                  id="mother-civil-status-field"
                  placeholder="Civil status"
                  required
                />
              </div>
              <div>
                <label>Occupation</label>
                <input
                  type="text"
                  id="mother-occupation-field"
                  placeholder="Occupation"
                  required
                />
              </div>
              <div>
                <label>Annual gross income</label>
                <input
                  type="text"
                  id="mother-annual-gross-field"
                  placeholder="Annual gross income"
                  required
                />
              </div>

              <div>
                <label>Educational Attainment</label>
                <input
                  type="text"
                  id="mother-educational-attainment"
                  placeholder="Educational Attainment"
                  required
                />
              </div>
            </div>
          </fieldset>

          <!--===========================================================================================================================================-->
          <!--PAGE, AND BUTTONS CONTAINER -->
          <!--===========================================================================================================================================-->
          <fieldset class="family-profile-form-footer">
            <p>Page 2 of 3</p>
            <div>
              <a
                href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-my-profile.php"
                id="my-profile-back-button"
              >
                <img src="/sad-final-project/sad-final-project/img/icons/arrow-left-icon.svg" alt="" />
                Back</a
              >

              <a
                href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-my-profile-3.php"
                class="my-profile-next-button"
                >Next</a
              >
            </div>
          </fieldset>
        </form>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/login.js"></script>
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="/sad-final-project/sad-final-project/script/validate.js"></script>
    <script src="/sad-final-project/sad-final-project/script/my-profile.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector(".sidebar-user-profile").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
</script> 
  </body>
</html>
