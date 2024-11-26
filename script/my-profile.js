function displayAccountData() {
  /*const emailInput = document.querySelector("#email-field").value.trim();
  const passwordInput = document.querySelector("#password-field").value.trim();
  const accountKey = checkCredentials(emailInput, passwordInput);
  if (!accountKey) {
    alert("error");
    return; 
  }*/

  //lagay yung dummy personal info per account sa fields
  if (account && account.personalInfo) {
    alert("test");
    document.getElementById("last-name-field").value = account.personalInfo.lastName; //nakabase lang to sa dummy personal infos, palitan nalang
    document.getElementById("given-name-field").value = account.personalInfo.givenName;
    document.getElementById("middle-name-field").value = account.personalInfo.middleName;
    document.getElementById("date-of-birth-field").value = account.personalInfo.dateOfBirth;
    document.getElementById("contact-number-field").value = account.personalInfo.phoneNumber;
    document.getElementById("email-field").value = account.personalInfo.email;
  } else {
    alert("error");
  }
}

/***************************************************************************************************************/
/***** CHANGE PASSWORD ****************************************************************************************/
/***************************************************************************************************************/
document.getElementById("change-password-popup").addEventListener("submit", function(event) {
  event.preventDefault(); 

  const currentPassowrd = document.getElementById("current-password-field").value;//for later use
  const newPassword = document.getElementById("new-password-field").value;
  const confirmPassword = document.getElementById("confirm-password-field").value;

  if (newPassword !== confirmPassword) {
    alert("New Password and Confirm Password do not match.");
    return;
  }

  if (newPassword.length < 8) {
    alert("New Password must be at least 8 characters long.");
    return;
  }

  alert("Password changed successfully!");
  closePopup('#change-password-popup');
});



document.addEventListener("DOMContentLoaded", () => {
  handleUploadNewPicture();
});
