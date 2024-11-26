<?php
include('../../php/showProfilePic.php');
include('staffs-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Staffs Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/calendar.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/application-templates-styles.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/application-general-styles.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/staffs-styles/staff-dashboard-styles.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!-- CONTENT CONTAINER -->
      <div id="staff-dashboard-container">

        <!-- Left Container -->
        <div class="staff-dashboard-left-container">

          <!-- Navigation Cards -->
          <div class="staff-home-pahe-nav-container">
            <div class="gray-container">

              <!-- First Row -->
              <div class="staff-card-nav-container">
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
              </div>

              <!-- Second Row -->
              <div class="staff-card-nav-container">
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
                <a href="#" class="staff-card-nav">
                  <img src="/sad-final-project/sad-final-project/img/staffs img/staff-programs-nav.png" alt="Programs">
                  <div>Programs</div>
                </a>
              </div>

            </div>
          </div>

          <!-- Announcements -->
          <div class="staff-announcement-container">
            <header>Announcement</header>
            <div class="staff-announcement-content-container">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima delectus, eum assumenda tempore voluptatibus autem nostrum illum quia perferendis, doloribus rem voluptates qui ut beatae accusantium natus quod. Quod, aliquam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima delectus, eum assumenda tempore voluptatibus autem nostrum illum quia perferendis, doloribus rem voluptates qui ut beatae accusantium natus quod. Quod, aliquam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima delectus, eum assumenda tempore voluptatibus autem nostrum illum quia perferendis, doloribus rem voluptates qui ut beatae accusantium natus quod. Quod, aliquam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima delectus, eum assumenda tempore voluptatibus autem nostrum illum quia perferendis, doloribus rem voluptates qui ut beatae accusantium natus quod. Quod, aliquam.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima delectus, eum assumenda tempore voluptatibus autem nostrum illum quia perferendis, doloribus rem voluptates qui ut beatae accusantium natus quod. Quod, aliquam.</p>
            </div>
          </div>

        </div>

        <!-- Right Container -->
        <div class="staff-dashboard-right-container">
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

          <!--ACTION ITEMS-->
          <div class="action-items-container">
              <header>Action items</header>
              <div class="action-items-content">
                <div class="action-items-content-row">
                  <div>
                      <p id="applications-to-verify" style="font-size: 5rem; font-weight: 1000; color: red;">67</p>
                      <p style="font-size: 1.5rem;">Applications to verify</p>
                  </div>
                </div>

                <div class="action-items-content-row">
                  <div>
                      <p id="applications-done" style="font-size: 5rem; font-weight: 1000; color: var(--green)">59</p>
                      <p style="font-size: 1.5rem;">Done</p>
                  </div>
                </div>
              </div>
          </div>
        </div>

      </div>

      <footer></footer>
    </div>

    <!-- SCRIPTS -->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="/sad-final-project/sad-final-project/script/calendar.js"></script>

  </body>
</html>
