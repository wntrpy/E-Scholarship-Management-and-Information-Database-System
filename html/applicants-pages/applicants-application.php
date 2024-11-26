<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Application</title>
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
        <h1>Important reminders before you proceed</h1>
        <div>
          <h2>1. Valid Email Address</h2>
          <p>
            A valid and active email address is essential for receiving
            automated notifications. Important updates such as application
            deadlines, renewal requirements, and scholarship announcements will
            be sent to your registered email. Please ensure your email is
            accurate and regularly checked.
          </p>
        </div>

        <div>
          <h2>2. Complete Required Documents</h2>
          <p>
            Prepare all necessary documents in <span>PDF</span> format before
            proceeding.
          </p>
        </div>

        <div style="margin-bottom: 20%">
          <h2>3. Stable Internet Connection</h2>
          <p>
            Ensure you have a reliable internet connection for smooth form
            completion and document uploads.
          </p>
        </div>
        <div class="button-container">
          <a
            class="proceed-button"
            href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application-personal-info.php"
            >Proceed</a
          >
        </div>
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
    
  </body>
</html>
