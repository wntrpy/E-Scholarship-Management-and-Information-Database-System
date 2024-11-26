<?php
  include('../../php/showProfilePic.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/calendar.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/dashboard.css" />
</head>
<body>  
      <!--===========================================================================================================================================-->
      <!--SIDEBAR-->
      <!--===========================================================================================================================================-->
      <div id="sidebar">
        <div class="sidebar-header">
          <img src="/sad-final-project/sad-final-project/img/icons/systemLogo-icon.png" alt="" width="140px" />
        </div>

        <button
          class="sidebar-user-profile"
          onclick="toggleDropDown('#dropdown')"
        >
          <div class="sidebar-user-profile-left-container">
            <img
              id="user-profile-image"
              src="http://localhost/uploads/profile_pictures/<?php echo basename($profile_picture); ?>" alt="Profile Picture" id="profile-picture"
              alt=""
              width="50px"
            />
            <div>
              <p id="user-first-name">Denyel</p>
              <p id="user-last-name">Pirnandow</p>
            </div>
          </div>
        </button>

        <hr />

        <div class="sidebar-nav">
          <a
            href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-dashboard.php"
            id="applicant-dashboard-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-category.php"
            id="applicant-category-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-application.php"
          id="applicant-application-nav"

          >
            <img src="/sad-final-project/sad-final-project/img/applicants img/application.png" alt="" />
            <p>Application</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-status.php"
          id="applicant-status-nav"

          >
            <img src="/sad-final-project/sad-final-project/img/icons/status-icon.svg" alt="" />
            <p>Status</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-feedback.php"
          id="applicant-feedback-nav"

          >
            <img src="/sad-final-project/sad-final-project/img/icons/feedback.png" alt="" />
            <p>Feedback</p>
          </a>
        </div>
      </div>


    <!--===========================================================================================================================================-->
    <!--DROPDOWN MENU-->
    <!--===========================================================================================================================================-->
    <div class="dropdown" id="dropdown">
      <a
        href="/sad-final-project/sad-final-project/html/applicants-pages/applicants-my-profile.php"
        >My Profile</a
      >
      <a href="/sad-final-project/sad-final-project/index.php">Log out</a>
    </div>
</body>
</html>



