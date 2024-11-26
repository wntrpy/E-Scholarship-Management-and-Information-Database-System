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

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $subject = $data['subject'];
    $date = $data['date'];
    $message = $data['message'];

    if (empty($subject) || empty($date) || empty($message)) {
        echo json_encode(['success' => false, 'message' => 'Invalid input']);
        exit;
    }

    $sql = "UPDATE notice SET Message = ? WHERE SubjectAnn = ? AND AnnouncementDate = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('sss', $message, $subject, $date);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Database error']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to prepare statement']);
    }

    $conn->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}

?>