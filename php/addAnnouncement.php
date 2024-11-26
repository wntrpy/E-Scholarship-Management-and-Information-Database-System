<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "testdatabase";

// Create a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the form
    $subject = $_POST['announcement-subject'];
    $message = $_POST['announcement-description'];

    // Get the current max AnnouncementID
    $result = $conn->query("SELECT MAX(AnnouncementID) AS max_announcement_id FROM notice");
    $row = $result->fetch_assoc();
    $announcementID = $row['max_announcement_id'] + 1; // Increment by 1

    // Get the current max FeedbackID
    $result = $conn->query("SELECT MAX(FeedbackID) AS max_feedback_id FROM notice");
    $row = $result->fetch_assoc();
    $feedbackID = $row['max_feedback_id'] + 1; // Increment by 1

    // Prepare the SQL insert statement with NOW() for date and time
    $stmt = $conn->prepare("INSERT INTO notice (FeedbackID, AnnouncementID, SubjectAnn, Message, AnnouncementDate, FeedbackStatus) VALUES (?, ?, ?, ?, NOW(), 'Approve')");

    // Bind the parameters to the SQL query
    $stmt->bind_param("iiss", $feedbackID, $announcementID, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        // Announcement added successfully
        // Optionally, you can echo a success message or redirect
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
