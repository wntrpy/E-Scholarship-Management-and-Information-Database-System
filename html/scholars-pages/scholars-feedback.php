<?php
include('../../php/showProfilePic.php');
include('scholars-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Scholar Feedback</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/student-styles/feedback-styles.css" />
  </head>
  <body>
    <div class="main-container">
      <header id="layout-header"></header>

      <!--===========================================================================================================================================-->
      <!--CONTENT CONTAINER-->
      <!--===========================================================================================================================================-->
      <div id="feedback-container">
          <form action="" method="post" id="feedback-form">
            <h2>Feedback</h2>
            <p>Your voice matters! Welcome to the Feedback Page of our scholarship program. We value your thoughts and experiences as they help us improve and better support students like you. Whether you have suggestions, questions, or ideas on how we can enhance our program, we’d love to hear from you. Your feedback is essential in shaping a brighter future for all our scholars!</p>
            
            <!-- Dropdown for Feedback Type -->
            <div class="form-group">
              <label for="feedback-type">Feedback type</label>
              <select id="feedback-type" name="feedback-type">
                <option value="complaint">Complaint</option>
                <option value="suggestion">Suggestion</option>
                <option value="concern">Concern</option>
              </select> 
            </div>

            <!-- Textarea for Feedback Message -->
            <div class="form-group">
              <label for="message">Your message</label>
              <textarea id="message" name="message" placeholder="Your message goes here..."></textarea>
            </div>

            <!-- Buttons -->
            <div class="form-buttons">
              <button type="button" class="back-button">Back</button>
              <button type="submit" class="submit-button">Submit</button>
            </div>
          </form>
      </div>

      <footer></footer>
    </div>



    <!--===========================================================================================================================================-->
    <!--SCRIPTS-->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("#scholar-feedback-nav").style.backgroundColor = "rgba(217, 217, 217, 0.21)";
    });
</script>
  </body>
</html>
