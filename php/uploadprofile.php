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
session_start();
include("../connection.php"); // Ensure the database connection is included

// Check if the file was uploaded
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['profile_picture'])) {
    // Set the target directory
    $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads/profile_pictures/"; // Absolute path
    $file_name = basename($_FILES["profile_picture"]["name"]);
    $file_name = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $file_name);  // Sanitize file name
    $target_file = $target_dir . $file_name;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $uploadOk = 1;

    // Check if the file is an image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size (limit to 5MB)
    if ($_FILES["profile_picture"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats (JPG, JPEG, PNG, GIF)
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Move the uploaded file to the server directory
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
            // Get the user's ID from session 
            $user_id = $_SESSION['user_id']; 

            // Update the profile picture in the database
            $sql = "UPDATE login SET profile_picture = ? WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $target_file, $user_id);

            if ($stmt->execute()) {
                echo '<script>
                        Swal.fire({
                          icon: "success",
                          title: "Success",
                          text: "Profile picture updated successfully!",
                        }).then(() => {
                          window.history.back();
                        });
                      </script>';
            } else {
                echo "Error updating record: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
} else {
    echo "No file uploaded.";
}
?>
