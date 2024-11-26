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
        <div class="sidebar-header" >
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
            href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-dashboard.php"
            id="scholar-dashboard-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-category.php"
          id="scholar-category-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-renewal.php"
          id="scholar-renewal-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/scholar img/renewal-icon.png" alt="" />
            <p>Renewal</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-status.php"
          id="scholar-status-nav"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/status-icon.svg" alt="" />
            <p>Status</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-feedback.php"
          id="scholar-feedback-nav"
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
      <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-my-profile.php">My Profile</a>
      <a href="/sad-final-project/sad-final-project/index.php">Log out</a>
    </div>
</body>
</html>