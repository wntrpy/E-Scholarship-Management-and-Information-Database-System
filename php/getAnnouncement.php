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

try {
    // Check database connection
    if (!$conn) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }

    // Query to fetch announcements ordered by date and time (most recent first)
    $query = "SELECT * FROM notice ORDER BY AnnouncementDate DESC";
    $result = $conn->query($query);

    if (!$result) {
        throw new Exception("Query failed: " . $conn->error);
    }

    $data = [];
    $recentAnnouncement = null;

    if ($result->num_rows > 0) {
        $first = true;
        while ($row = $result->fetch_assoc()) {
            if ($first) {
                $recentAnnouncement = $row; // Capture the latest announcement (most recent based on date and time)
                $first = false;
            } else {
                $data[] = $row; // Collect the rest as previous announcements
            }
        }
    }

    // Output JSON response
    echo json_encode([
        'recent' => $recentAnnouncement,
        'previous' => $data
    ]);

} catch (Exception $e) {
    // Return error as JSON
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
} finally {
    // Close the database connection
    if ($conn) {
        $conn->close();
    }
}
?>
