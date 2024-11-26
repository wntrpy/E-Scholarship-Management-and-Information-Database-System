<?php
  include("connection.php");

  session_start();

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'] ?? '';
      $password = $_POST['password'] ?? '';
  
      // Prepare and execute the query to avoid SQL injection
      $stmt = $conn->prepare("SELECT user_id, username, role FROM login WHERE username = ? AND password = ?");
      $stmt->bind_param("ss", $email, $password);
      $stmt->execute();
      $result = $stmt->get_result();
  
      if ($result->num_rows === 1) {
          $row = $result->fetch_assoc();
  
          $_SESSION['user_id'] = $row['user_id']; 
          $_SESSION['username'] = $row['username'];
          $_SESSION['role'] = $row['role'];
  
          // Redirect based on role
          switch ($row['role']) {
              case "applicant":
                  header("Location: html/applicants-pages/applicants-dashboard.php");
                  exit();
              case "scholar":
                  header("Location: html/scholars-pages/scholars-dashboard.php");
                  exit();
              case "staff":
                  header("Location: html/staffs-pages/staffs-dashboard.php");
                  exit();
          }
      }
      else {
        $_SESSION['login_error'] = 'Invalid credentials'; 
    } 
      $stmt->close();
      $conn->close();
  } else {
     /* http_response_code(405); // Method Not Allowed
      echo 'Invalid request method';
      exit();*/
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/login.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css">
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />


  </head>
  <body style="background: red;">
    <div class="main-container">
      <div class="image-container"> 
        <img src="img/logo1.png" alt="logo1" />
      </div>

      <form id="login-form" name = "form" action="index.php" method="POST">
        <div class="form-content">
          <h2 class="login-title">Log in to your account</h2>
          <div class="email-field">
            <label>Email</label>
            <input type="text" id="email-field" name="email" />
          </div>
          <div class="password-field">
            <label>Password</label>
            <input type="password" id="password-field" name="password"/>
          </div>
          <a href="/sad-final-project/sad-final-project/html/forgot-password.php" id="forgot-password"
            >Forgot your password?</a
          >
          <input type="submit" class="login-btn" value="Log in" name="submit">
          <!-- Log in -->
          
          <p>
            Don't have an account?
            <button
              id="create-account"
              type="button"
              onclick="openPopup('#user-register-popup')"
            >
              Create an account 
            </button>
          </p>
        </div>
      </form>

      <!--===========================================================================================================================================-->
      <!--USER REGISTER POPUP-->
      <!--===========================================================================================================================================-->

      <!--yung overlay is para magmukhang inactive yung ibang functionalities, and ma-highlight yung register-->
      <div class="overlay"></div>
      <div id="user-register-popup">
        <!-- onsubmit="validatePassword(event)"-->
        <form id="register-form" name = "form" action="registration.php" method="POST" onsubmit="return validatePassword(event)">
          <h2 style="font-size: 2.5rem">Your Personal Information</h2>
          <p class="register-info">
            Ensure all details are accurate before proceeding.
          </p>

          <div class="register-inputs-group">
            <div>
              <label for="register-first-name-field">First Name*</label>
              <input type="text" id="register-first-name-field" name="firstname" required  />
            </div>

            <div>
              <label for="register-middle-name-field">Middle Name*</label>
              <input type="text" id="register-middle-name-field" name="midname" required />
            </div>

            <div>
              <label for="register-last-name-field">Last Name*</label>
              <input type="text" id="register-last-name-field" name="lastname" required />
            </div>
          </div>

          <div class="register-inputs-group">
            <div>
              <label for="register-date-of-birth-field">Date of Birth*</label>
              <input type="date" id="register-date-of-birth-field" name="dateofbirth" required />
            </div>

            <div>
              <label for="register-phone-no-field">Phone No.*</label>
              <input type="tel" id="register-phone-no-field" name="phone"required />
            </div>

            <div>
              <label for="register-email-field">Email*</label>
              <input type="email" id="register-email-field" name="email"required />
            </div>
          </div>

          <div class="register-inputs-group">
            <div>
              <label for="register-password-field">Password*</label>
              <input type="password" id="register-password-field" name="password" required />
            </div>

            <div>
              <label for="register-confirm-password-field">Confirm Password*</label>
              <input
                type="password"
                id="register-confirm-password-field"
                name = "confirmpass"
                required
              />
            </div>
          </div>

          <div class="button-container">
            <button
              class="back-button-register"
              onclick="closePopup('#user-register-popup')"
            >
              <img src="img/icons/arrow-left-icon.svg" alt="" />
              <p style="color: black; margin: 0px">Back</p>
            </button>

            <input type="submit" value="Register" class="submitBtn" name="submit" />
          </div>
        </form>
      </div>
    </div>

    <!--SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="/sad-final-project/sad-final-project/script/validate.js"></script>



    <script>
      document.querySelector("#login-form").addEventListener("submit", function (event) {
      const emailInput = document.querySelector("#email-field").value.trim();
      const passwordInput = document.querySelector("#password-field").value.trim();

      // Prevent form submission if email or password is empty
      if (!emailInput || !passwordInput) {
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "All fields must be filled out!",
        });
        event.preventDefault(); 
        return false;
      }
    });
    </script>


  </body>
</html>
