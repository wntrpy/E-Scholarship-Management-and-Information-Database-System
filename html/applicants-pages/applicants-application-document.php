<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document submission</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/application.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!-- Content Container -->
      <div id="application-content-container">
        <form id="document-list-container" class="application-form">
          <label>Upload the following required documents:</label>
          <div class="document-list-table">
            <!-- Table header -->
            <header>
              <div>Name</div>
              <div style="gap: 160px">
                <p>File</p>
                <p>Status</p>
                <p>Operations</p>
              </div>
            </header>
            <!--CONTAINER FOR DOCUMENT ENTRIES-->
            <div class="document-list-content" id="document-list"></div>
          </div>

          <div class="personal-info-form-footer">
            <p style="font-size: 1.5rem; margin-top: 3rem">Page 4 of 5</p>
            <div>
              <a
                class="application-form-back-button"
                href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-family-info.php"
              >
                <img src="/sad-final-project/sad-final-project/img/icons/arrow-left-icon.svg" alt="" />
                Back
              </a>

              <input
                type="submit"
                value="Submit"
                class="application-form-next-button"
                id="application-form-submit-button"
              />
            </div>
          </div>
        </form>
      </div>

      <footer></footer>
    </div>

    <!-- Scripts -->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="/sad-final-project/sad-final-project/script/category.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#applicant-application-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
</script>

    <script>
      document
        .getElementById("document-list-container")
        .addEventListener("submit", function (event) {
          event.preventDefault(); 

          if (this.checkValidity()) {
            alert("Test");
            window.location.href =
              "/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-submitted.php";
          } else {
            this.reportValidity();
            alert("error bitch");
          }
        });
    </script>
  </body>
</html>
