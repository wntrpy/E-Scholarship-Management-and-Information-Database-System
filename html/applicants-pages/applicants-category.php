<?php
include('../../php/showProfilePic.php');
include('applicants-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Applicant Category</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/category.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!-- CONTENT CONTAINER -->
      <div class="category-main-container">
        <!-- Grid Container -->
        <div class="category-cards-container">
          <div class="category-card">
            <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="" />
            <p>SHS PUBLIC</p>
            <button onclick="openPopup('#shs-public-popup')">See more...</button>
          </div>

          <div class="category-card">
            <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="" />
            <p>SHS PRIVATE</p>
            <button onclick="openPopup('#shs-private-popup')">See more...</button>
          </div>

          <div class="category-card">
            <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="" />
            <p>STATE/LOCAL UNIVERSITIES AND COLLEGES</p>
            <button onclick="openPopup('#state-local-popup')">See more...</button>
          </div>

          <div class="category-card">
            <img src="/sad-final-project/sad-final-project/img/category-card-pic.png" alt="" />
            <p>OS PRIVATE UNIVERSITIES AND COLLEGES</p>
            <button onclick="openPopup('#os-private-popup')">See more...</button>
          </div>
        </div>
      </div>

      <footer></footer>
    </div>

    <!-- CATEGORY POPUPS -->
    <div class="overlay"></div>

    <!-- SHS PUBLIC -->
    <div id="shs-public-popup">
      <h1>SHS PUBLIC</h1>
      <div class="category-popup-main-container">
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>1. Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)</p>
            <p>2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)</p>
            <p>3. Barangay Clearance from the place of residence (Original)</p>
            <p>4. Certificate of Enrollment/Registration (COE/COR SY 2024-2025) (Original/Photocopy)</p>
            <p>5. Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)</p>
            <p>6. Photocopy of Certificate of Completion for Incoming Grade 11 (Original and Photocopy)</p>
            <p>
              7. Photocopy of National ID or School ID (Front and back with handwritten complete name w/signature, 
              complete address, and contact no.) (2 copies)
            </p>
          </div>
          <a
            href="https://drive.google.com/file/d/1JNnFW8d65ei3A_Rd0g9Zb_1fiHFgB1mS/view"
            class="download-requirements-btn"
            target="_blank"
          >Download application requirements</a>
        </div>

        <div class="application-available-container">
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>AUGUST 19 2024 <br /> MONDAY</p>
            </div>
          </div>

          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>90</p>
            </div>
          </div>

          <button onclick="closePopup('#shs-public-popup')">
            <img src="/sad-final-project/sad-final-project/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
    </div>

    <!-- SHS PRIVATE -->
    <div id="shs-private-popup">
      <h1>SHS PRIVATE</h1>
      <div class="category-popup-main-container">
        <div class="list-of-requirements-container">
          <header>List of Requirements</header>
          <div class="lists-of-requirements-content">
            <p>1. Filled out Scholarship Application Form with 1x1 picture (1 page only back-to-back)</p>
            <p>2. Letter addressed to Gov. Daniel R. Ferndando (Handwritten in short or legal bond paper)</p>
            <p>3. Barangay Clearance from the place of residence (Original)</p>
            <p>4. Certificate of Enrollment/Registration (COE/COR SY 2024-2025) (Original/Photocopy)</p>
            <p>5. Report Card AY 2023-2024 for Grade 11 & 12 (Photocopy)</p>
            <p>6. Photocopy of Certificate of Completion for Incoming Grade 11 (Original and Photocopy)</p>
            <p>7. Photocopy of Birth Certificate</p>
            <p>
              8. Photocopy of National ID or School ID (Front and back with handwritten complete name w/signature, 
              complete address, and contact no.) (2 copies)
            </p>
          </div>
          <a
            href="https://drive.google.com/file/d/1R7MSVd8SUAnGg-CwXrfeBHUvLukJcTUy/view"
            class="download-requirements-btn"
            target="_blank"
          >Download application requirements</a>
        </div>

        <div class="application-available-container">
          <div class="application-date-container">
            <header>Application date</header>
            <div class="application-date-content">
              <p>AUGUST 19 2024 <br /> MONDAY</p>
            </div>
          </div>

          <div class="available-slots-container">
            <header>Available slots</header>
            <div class="available-slots-content">
              <p>90</p>
            </div>
          </div>

          <button onclick="closePopup('#shs-private-popup')">
            <img src="/sad-final-project/sad-final-project/img/icons/arrow-right-icon.svg" alt="" />
            Back
          </button>
        </div>
      </div>
    </div>

    <!-- Add similar sections for other categories -->

    <!-- SCRIPTS -->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const categoryTexts = document.querySelectorAll(".category-card p");
        categoryTexts.forEach((text) => {
          if (text.textContent.trim().length > 20) {
            text.classList.add("long-text");
          }
        });
      });

      document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("#applicant-category-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
      });
    </script>
  </body>
</html>
