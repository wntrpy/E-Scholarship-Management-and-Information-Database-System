<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Dashboard</title>
    <html lang="en" dir="ltr">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/calendar.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-page-styles/dashboard.css" />
  </head>
  <body style="overflow-x: hidden;">
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!-- CONTENT CONTAINER -->
      <!--===========================================================================================================================================-->
      <div id="dashboard-content-container">
        <div class="home-page-container">
          <div class="home-page-nav-container"> 

            <!-- First row -->
            <div>
              <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-category.php">
                <img src="/sad-final-project/sad-final-project/img/applicants img/dashboard-category.png" alt="">
                <p>Category</p>
              </a>

              <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-status.php">
                <img src="/sad-final-project/sad-final-project/img/applicants img/dashboard-status.png" alt="">
                <p>Status</p>
              </a>
            </div>

            <!-- Second row -->
            <div>
              <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application.php">
                <img src="/sad-final-project/sad-final-project/img/applicants img/dashboard-application.png" alt="">
                <p>Application</p>
              </a>

              <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-feedback.php">
                <img src="/sad-final-project/sad-final-project/img/applicants img/dashboard-feedback.png" alt="">
                <p>Feedback</p>
              </a>
            </div>

          </div>
        </div>

        <!-- CALENDAR AND ANNOUNCEMENT -->
        <div class="home-page-bottom-container">
          <div class="wrapper">

            <!-- Calendar -->
            <div class="cbody">
              <header class="main-header"></header>
              <div class="calendar-container">
                <header class="calendar-header">
                  <p class="calendar-current-date"></p>
                  <div class="calendar-navigation">
                    <span id="calendar-prev" class="material-symbols-rounded">
                      chevron_left
                    </span>
                    <span id="calendar-next" class="material-symbols-rounded">
                      chevron_right
                    </span>
                  </div>
                </header>

                <div class="calendar-body">
                  <ul class="calendar-weekdays">
                    <li>Sun</li>
                    <li>Mon</li>
                    <li>Tue</li>
                    <li>Wed</li>
                    <li>Thu</li>
                    <li>Fri</li>
                    <li>Sat</li>
                  </ul>
                  <ul class="calendar-dates"></ul>
                </div>
              </div>
            </div>

            <!-- Announcement -->
            <div class="announcement-container">
              <h2 style="margin: 1rem 0rem 0rem 2rem;">Announcement</h2>
              <div class="announcement-content-container">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, rerum eligendi facere doloremque exercitationem eum ratione beatae ab deserunt commodi labore eveniet maiores cupiditate quibusdam necessitatibus similique dolore dolorum voluptatibus?</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, rerum eligendi facere doloremque exercitationem eum ratione beatae ab deserunt commodi labore eveniet maiores cupiditate quibusdam necessitatibus similique dolore dolorum voluptatibus?</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, rerum eligendi facere doloremque exercitationem eum ratione beatae ab deserunt commodi labore eveniet maiores cupiditate quibusdam necessitatibus similique dolore dolorum voluptatibus?</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, rerum eligendi facere doloremque exercitationem eum ratione beatae ab deserunt commodi labore eveniet maiores cupiditate quibusdam necessitatibus similique dolore dolorum voluptatibus?</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, rerum eligendi facere doloremque exercitationem eum ratione beatae ab deserunt commodi labore eveniet maiores cupiditate quibusdam necessitatibus similique dolore dolorum voluptatibus?</p>

              </div>
            </div>

          </div>
        </div>

      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!-- SCRIPTS -->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="/sad-final-project/sad-final-project/script/calendar.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("#applicant-dashboard-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
      });
    </script>
  </body>
</html>
