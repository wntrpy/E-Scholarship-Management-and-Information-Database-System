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

    // Prepare the SQL insert statement
    $stmt = $conn->prepare("INSERT INTO notice (FeedbackID, AnnouncementID, SubjectAnn, Message, AnnouncementDate, FeedbackStatus) VALUES (?, ?, ?, ?, CURDATE(), 'Approve')");

    // Bind the parameters to the SQL query
    $stmt->bind_param("iiss", $feedbackID, $announcementID, $subject, $message);

    // Execute the statement
    if ($stmt->execute()) {
        //echo "Announcement added successfully!";
        //show ng alert dito na na add na or kahit wag 
        echo "<script>alert('test add');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close the database connection
$conn->close();
include('staffs-sidebar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Staffs Announcement</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/general.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/layout.css" />
    <link rel="stylesheet" href="/sad-final-project/sad-final-project/styles/user-pages-styles/staffs-styles/staff-announcement-styles.css" />
</head>

<body>
    <div class="main-container">
        <header id="layout-header"></header>
        <div class="overlay"></div>

        <!--===========================================================================================================================================-->
        <!--CONTENT CONTAINER-->
        <!--===========================================================================================================================================-->
        <div id="staff-announcement-container">
            <div class="main-container">

                  <!-- ADD ANNOUNCEMENT CONTAINER -->
            <form class="add-announcement-container" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="announcement-textfield-container">
                    <input type="text" name="announcement-subject" placeholder="Type announcement subject here...">
                </div>

                <div class="announcement-textarea-container">
                    <textarea id="announcement-description-textarea" name="announcement-description" rows="5" cols="30" placeholder="Description..."></textarea>
                </div>

                <input type="submit" value="Post" id="announcement-post-btn">
            </form>


                <!-- ANNOUNCEMENT LIST CONTAINER -->
                <div class="announcement-list-container">
                    <div class="recent-announcement-container">
                        <h2>RECENT POST</h2>
                    </div>

                    <div class="previous-announcement-container">
                        <h2>PREVIOUS POST</h2>
                    </div>
                </div>
            </div>
        </div>

        <footer></footer>
    </div>

    <!--===========================================================================================================================================-->
    <!-- ANNOUNCEMENT BUTTON POPUP -->
    <!--===========================================================================================================================================-->
    <div id="announcement-button-popup">
        <header>
            <div>
                <p style="font-size: 1.75rem; font-weight: 700;">Subject:</p>
                <p id="announcement-popup-subect">OS PRIVATE-RENEWAL</p>
            </div>

            <div>
                <p style="font-size: 1.75rem; font-weight: 700;">Date:</p>
                <p id="announcement-popup-date">03/23/2004</p>
            </div>
        </header>

        <form action="staffs-announcement.php" method="post">
    <h2>Content:</h2>
    <div class="announcement-popup-content-container">
        <textarea 
        id="announcement-popup-content-textarea" 
        name="announcement-popup-content" 
        rows="5" 
        cols="30" 
        readonly></textarea>
    </div>

    <footer>
        <button type="button" class="announcement-popup-close-btn" onclick="closePopup('#announcement-button-popup')">
            <img src="/sad-final-project/sad-final-project/img/icons/arrow-left-icon.svg" alt="" /> Back
        </button>
        <div>
            <input type="submit" value="Post" class="announcement-popup-button">
            <button type="button" id="edit-btn" class="announcement-popup-button">Edit</button>
        </div>
    </footer>
</form>

   
    </div>

    <!--===========================================================================================================================================-->
    <!-- SCRIPTS -->
    <!--===========================================================================================================================================-->
    <script src="/sad-final-project/sad-final-project/script/open-popups.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
document.getElementById('edit-btn').addEventListener('click', function () {
  const textarea = document.getElementById('announcement-popup-content-textarea');
  textarea.readOnly = !textarea.readOnly;

  // Toggle button text between "Edit" and "Save"
  this.textContent = textarea.readOnly ? 'Edit' : 'Save';
});
</script>

<script>
document.querySelector('.announcement-popup-button[type="submit"]').addEventListener('click', function (event) {
  event.preventDefault(); // Prevent form submission if it's a button, not a form

  console.log('Submitting POST request'); // Debug message

  const message = document.getElementById('announcement-popup-content-textarea').value;
  const subject = document.getElementById('announcement-popup-subect').textContent;
  const date = document.getElementById('announcement-popup-date').textContent;
  
  fetch('/sad-final-project/sad-final-project/php/updateAnnouncement.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      subject: subject,
      date: date,
      message: message,
    }),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      console.log('Response:', data); // Log the server response
      if (data.success) {
        alert('Announcement updated successfully!');
        closePopup('#announcement-button-popup'); // Close the popup
      } else {
        alert('Failed to update announcement.');
      }
    })
    .catch((error) => {
      console.error('Error updating announcement:', error);
      alert('An error occurred while updating the announcement.');
    });
});


</script>



<script>
  document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM fully loaded and parsed."); // Debug message

  fetch('/sad-final-project/sad-final-project/php/getAnnouncement.php')
    .then((response) => {
      if (!response.ok) {
        throw new Error(`HTTP error! Status: ${response.status}`);
      }
      return response.json();
    })
    .then((data) => {
      console.log("Fetched data:", data); // Log the fetched data
      const recentContainer = document.querySelector('.recent-announcement-container');
      const previousContainer = document.querySelector('.previous-announcement-container');

      // Clear existing announcements
      recentContainer.innerHTML = '<h2>RECENT POST</h2>';
      previousContainer.innerHTML = '<h2>PREVIOUS POST</h2>';

      // Populate the recent announcement
      if (data.recent) {
        const recentButton = createAnnouncementButton(data.recent);
        recentContainer.appendChild(recentButton);
      }

      // Populate previous announcements
      if (data.previous && data.previous.length > 0) {
        data.previous.forEach((announcement) => {
          const previousButton = createAnnouncementButton(announcement);
          previousContainer.appendChild(previousButton);
        });
      }
    })
    .catch((error) => {
      console.error("Error fetching announcements:", error);
    });
});

/**
 * Create a button for an announcement
 */
function createAnnouncementButton(announcement) {
  console.log("Creating button for announcement:", announcement); // Debug message
  const button = document.createElement('button');
  button.className = 'announcement-btn';
  button.onclick = () => {
    populatePopup(announcement);
    openPopup('#announcement-button-popup');
  };

  const subject = document.createElement('p');
  subject.className = 'announcement-subject';
  subject.textContent = announcement.SubjectAnn;

  const date = document.createElement('p');
  date.className = 'announcement-date';
  date.textContent = announcement.AnnouncementDate;

  button.appendChild(subject);
  button.appendChild(date);

  return button;
}

/**
 * Populate the popup with announcement data
 */
function populatePopup(announcement) {
  console.log("Populating popup with:", announcement); // Debug message
  document.getElementById('announcement-popup-subect').textContent = announcement.SubjectAnn;
  document.getElementById('announcement-popup-date').textContent = announcement.AnnouncementDate;
  document.getElementById('announcement-popup-content-textarea').value = announcement.Message;
}


</script>
</body>

</html>
