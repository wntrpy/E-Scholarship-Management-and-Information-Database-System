<?php
include('../../php/showProfilePic.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
              src="http://localhost/uploads/profile_pictures/<?php echo basename($profile_picture); ?>"
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
            href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-dashboard.php"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-programs.php">
            <img src="/sad-final-project/sad-final-project/img/icons/category-icon.svg" alt="" />
            <p>Programs</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-verification.php">
            <img src="/sad-final-project/sad-final-project/img/staffs img/verification-icon.png" alt="" />
            <p>Verification</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-announcement.php">
            <img src="/sad-final-project/sad-final-project/img/staffs img/announcements-icon.png" alt="" />
            <p>Announcement</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-view-feedbacks.php">
            <img src="/sad-final-project/sad-final-project/img/staffs img/view-feedbacks-icon.png" alt="" />
            <p>View Feedbacks</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-generate-email.php">
            <img src="/sad-final-project/sad-final-project/img/staffs img/generate-email-icon.png" alt="" />
            <p>Generate Email</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-generate-reports.php">
            <img src="/sad-final-project/sad-final-project/img/staffs img/generate-reports-icon.png" alt="" />
            <p>Generate Reports</p>
          </a>
        </div>
      </div>


    <!--=============================================================================================================================================-->  
    <!--DROPDOWN MENU-->
    <!--===========================================================================================================================================-->
    <div class="dropdown" id="dropdown">
      <a href="/sad-final-project/sad-final-project/html/staffs-pages/staffs-my-profile.php">My Profile</a>
      <a href="/sad-final-project/sad-final-project/index.php">Log out</a>
    </div>
</body>
</html>