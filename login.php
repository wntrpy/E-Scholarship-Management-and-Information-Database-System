<?php
include("connection.php"); // Include the database connection

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
    
    
   

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Invalid request method';
    exit();
}
?>
