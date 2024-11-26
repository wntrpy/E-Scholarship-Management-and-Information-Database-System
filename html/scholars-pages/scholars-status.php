<?php
include('../../php/showProfilePic.php');
include('scholars-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <title>Scholar Status</title>
  <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
  <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
  <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/scholar-styles/scholar-status.css" />
</head>
<body>
  <div class="main-container">
    <header id="layout-header"></header>
    <div class="overlay"></div>
    
    <!-- CONTENT CONTAINER -->
    <div id="status-container">
      <div class="status-gray-container">
        <div class="wrapper">
          <div>Status</div>
          <div class="status-container">UNKNOWN</div>
          <button onclick="openPopup('#application-overview-popup')">View application details</button>
          <button onclick="openPopup('#payout-details-popup')">View payout details</button>
        </div>
      </div>
    </div>

    <footer></footer>
  </div>

  <!-- APPLICATION DETAILS POPUP -->
  <div id="application-overview-popup">
    <header id="application-header">
      <span>Application Overview</span>
    </header>
    <div id="application-content">
      <div id="application-category-status">
        <p>
          <strong style="font-size: 1.25rem;">Category:</strong>
          <span id="application-category">SHS PRIVATE</span>
        </p>
        <p>
          <strong style="font-weight: 200; margin-right: 1rem; font-size: 1.5rem;">Status:</strong>
          <span id="application-status-indicator">UNKNOWN</span>
        </p>
      </div>

      <div id="personal-information">
        <h3>Personal Information</h3>
        <p><strong>Full name:</strong> <span id="full-name">Maria Lucia Cruz</span></p>
        <p><strong>Age:</strong> <span id="age">22</span></p>
        <p><strong>Date of birth:</strong> <span id="birthdate">01/01/2002</span></p>
        <p><strong>Paaralang pinapasukan:</strong> <span id="school">Bulacan State University-Malolos</span></p>
        <p><strong>Grade Level:</strong> <span id="grade-levell">High School</span></p>
      </div>

      <div id="contact-information">
        <h3>Contact Information</h3>
        <p><strong>Email:</strong> <span id="email">marialucia2022@gmail.com</span></p>
        <p><strong>Mobile phone no.:</strong> <span id="mobile">09223550812</span></p>
      </div>

      <div id="permanent-address">
        <h3>Permanent Address</h3>
        <p><strong>Zipcode:</strong> <span id="zipcode">3017</span></p>
        <p><strong>House no./Unit no.:</strong> <span id="house-number">23</span></p>
        <p><strong>Compound/Street/Purok:</strong> <span id="street">Pugad</span></p>
        <p><strong>Barangay:</strong> <span id="barangay">Bambang</span></p>
        <p><strong>Village/Subdivision:</strong> <span id="village">N/A</span></p>
        <p><strong>City/Municipality:</strong> <span id="city">Bulakan</span></p>
      </div>
    </div>

    <div id="application-footer">
      <button id="application-overview-back-button" onclick="closePopup('#application-overview-popup')">Back</button>
      <a href="" id="application-overview-next-button">Next</a>
    </div>
  </div>

  <!-- PAYOUT DETAILS POPUP -->
  <div id="payout-details-popup">
    <header>
      <h2>Payout Details</h2>
      <div>
        <p>School Year</p>
        <select id="school-year-dropdown" class="dropdown">
          <option value="AY2023-2024, 1st sem">AY 2023-2024, 1st Sem</option>
        </select>
      </div>
    </header>

    <div class="main-wrapper">
      <table class="payout-details-table">
        <thead>
          <tr>
            <th>Payroll ID</th>
            <th>Scholar ID</th>
            <th>Payroll Status</th>
            <th>Received Date</th>
            <th>Received By</th>
            <th>Organized By</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>SCH2023</td>
            <td>Processed</td>
            <td>2023-11-01</td>
            <td>John Doe</td>
            <td>Admin Team</td>
          </tr>
        </tbody>
      </table>
    </div>
    <button id="payout-back-button" onclick="closePopup('#payout-details-popup')">Back</button>
  </div>

  <!-- SCRIPTS -->
  <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#scholar-status-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
  </script>
</body>
</html>
