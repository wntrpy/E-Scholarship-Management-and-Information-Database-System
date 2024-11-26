<?php
include('../../php/showProfilePic.php');
include('scholars-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Scholar Category</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="content-container">
        <p>Scholar Category</p>
      </div>

      <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#scholar-category-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
</script>
  </body>
</html>
