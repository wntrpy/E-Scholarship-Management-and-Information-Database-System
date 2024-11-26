<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    
</body>
</html>

<?php
// Include database configuration
include ("connection.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data and sanitize
    $firstname = htmlspecialchars($_POST['firstname']);
    $midname = htmlspecialchars($_POST['midname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $dateofbirth = htmlspecialchars($_POST['dateofbirth']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmpass'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo 
        '<script>
            Swal.fire({
            icon: "error",
            title: "Error",
            text: "Password did not match!",
            }).then(() => {
                window.history.back();
            });
        </script>';
        exit; // Stop further processing
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert into the database
        $sql = "INSERT INTO register (firstname, midname, lastname, dateofbirth, phone, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssss", $firstname, $midname, $lastname, $dateofbirth, $phone, $email, $hashed_password);

        if ($stmt->execute()) {
            echo 
            '<script>
                Swal.fire({
                icon: "success",
                title: "Success",
                text: "Registration Successful!",
                }).then(() => {
                    window.location.href = "index.php";
                });
            </script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>