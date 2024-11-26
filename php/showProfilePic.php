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