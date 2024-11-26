document.addEventListener("DOMContentLoaded", () => {
  fetch('/sad-final-project/sad-final-project/php/getAnnouncement.php')
    .then(response => response.json())
    .then(data => {
      const recentContainer = document.querySelector('.recent-announcement-container');
      const previousContainer = document.querySelector('.previous-announcement-container');
      alert("test");
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
        data.previous.forEach(announcement => {
          alert("test");
          const previousButton = createAnnouncementButton(announcement);
          previousContainer.appendChild(previousButton);
        });
      }
    })
    .catch(error => console.error('Error fetching announcements:', error));
});

/**
 * Create a button for an announcement
 */
function createAnnouncementButton(announcement) {
  const button = document.createElement('button');
  button.className = 'announcement-btn';
  button.addEventListener('click', () => {
    showAlert(announcement.SubjectAnn, announcement.AnnouncementDate, announcement.Message);
  });

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
 * Show alert or SweetAlert for the announcement
 */
function showAlert(subject, date, message) {
  if (typeof Swal !== 'undefined') {
    // Use SweetAlert if available
    Swal.fire({
      title: subject,
      html: `<p><strong>Date:</strong> ${date}</p><p>${message}</p>`,
      icon: 'info',
    });
  } else {
    // Fallback to standard alert
    alert(`Subject: ${subject}\nDate: ${date}\nMessage: ${message}`);
  }
}
