<?php
session_start();
var_dump($_SESSION);
include('../../connection.php');

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id']; // Retrieve the user's ID from session
} else {
  echo "No user logged in.";
  exit(); // Terminate further execution if no user is logged in
}
// Fetch the user's profile picture path from the database
$sql = "SELECT profile_picture FROM login WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($profile_picture);
$stmt->fetch();
$stmt->close();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Scholar Notification</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--SIDEBAR-->
      <!--===========================================================================================================================================-->
      <div id="sidebar">
        <div class="sidebar-header">
          <img src="/sad-final-project/sad-final-project/img/icons/systemLogo-icon.png" alt="" width="140px" />
          <a
            href="/sad-final-project/sad-final-project/html/scholars html/scholars-notifiation.php"
            class="notification-container"
            style="background-color: var(--nav-hover-active-state)"
          >
            <img src="/sad-final-project/sad-final-project/img/icons/notification-icon.png" alt="" />
          </a>
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
          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-dashboard.php">
            <img src="/sad-final-project/sad-final-project/img/icons/dashboard-icon.svg" alt="" />
            <p>Dashboard</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-category.php">
            <img src="/sad-final-project/sad-final-project/img/icons/category-icon.svg" alt="" />
            <p>Category</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-renewal.php">
            <img src="/sad-final-project/sad-final-project/img/scholar img/renewal-icon.png" alt="" />
            <p>Renewal</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-status.php">
            <img src="/sad-final-project/sad-final-project/img/icons/status-icon.svg" alt="" />
            <p>Status</p>
          </a>

          <a href="/sad-final-project/sad-final-project/html/scholars-pages/scholars-feedback.php">
            <img src="/sad-final-project/sad-final-project/img/icons/feedback.png" alt="" />
            <p>Feedback</p>
          </a>
        </div>
      </div>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="content-container">
        <p>Scholars My Profile Notification</p>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--DROPDOWN MENU-->
    <!--===========================================================================================================================================-->
    <div class="dropdown" id="dropdown">
      <a href="/sad-final-project/sad-final-project/html/scholars html/scholars-my-profile.php">My Profile</a>
      <a href="/sad-final-project/sad-final-project/index.php">Log out</a>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/scripts/open-popups.js"></script>
  </body>
</html>
