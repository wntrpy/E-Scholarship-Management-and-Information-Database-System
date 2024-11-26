<?php
  //Testing purposes only
  session_start();

  if (isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
  } else {
      header("Location: index.php"); // Redirect if not logged in
      exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <a href="logout.php">Logout</a>
</body>
</html>
