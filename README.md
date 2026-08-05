<h1 align="center">🎓 Scholarship Management System</h1>
<h3 align="center">Web-Based Scholarship Application and Tracking Platform</h3>
<p align="center"><i>Capstone Project</i></p>

---

## 📖 About

**Scholarship Management System** is a PHP and MySQL-based web application designed to simplify scholarship application processing, document submission, and user coordination across different roles. It provides separate experiences for applicants, scholars, staff, and head staff so each user can access the tools and information relevant to their responsibilities.

The system supports account registration, secure login, profile management, password recovery, announcements, feedback handling, and role-based dashboards to help organize the scholarship workflow from application to review.

---

## ✨ Features

- 🔐 Applicant registration, login, and password recovery
- 👤 Role-based dashboards for applicants, scholars, staff, and head staff
- 📝 Scholarship application forms and document submission
- 📁 Profile management and password change flows
- 📧 Email-based password reset using PHPMailer
- 📢 Announcements and feedback pages for internal coordination
- 📊 Administrative tools for managing categories, requirements, and records
- 🖼️ Profile image upload and document handling support

---

## 🛠️ Built With

![PHP](https://img.shields.io/badge/-PHP-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/-MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Composer](https://img.shields.io/badge/-Composer-885630?style=flat-square&logo=composer&logoColor=white)
![PHPMailer](https://img.shields.io/badge/-PHPMailer-D14836?style=flat-square&logo=maildotru&logoColor=white)

- **PHP** — server-side application logic
- **MySQL / MariaDB** — database storage and relationships
- **Composer** — dependency management
- **PHPMailer** — email delivery for password reset workflows
- **HTML, CSS, and JavaScript** — user interface and client-side interaction

---

## 🎯 Project Focus

This capstone project was developed with a strong focus on **organization and accessibility** for scholarship-related processes. By separating workflows by user role and centralizing document handling, announcements, and application tracking, the system helps reduce manual coordination and makes scholarship management more efficient for both applicants and administrators.

---

## 🚀 Setup

1. Clone or copy the project into your local web server directory.
2. Import the database into MySQL or MariaDB. The application expects a database named `tulongpangedukasyonsystem`.
3. Update the database credentials in [connection.php](connection.php) if your local setup uses a different host, username, password, or database name.
4. Install PHP dependencies with Composer if needed:

```bash
composer install
```

5. Configure the password reset mailer in [html/send-password-reset.php](html/send-password-reset.php) with your SMTP credentials and sender details.
6. Open the project through your local server and start at [index.php](index.php).

---

## 📌 Main Entry Points

- [index.php](index.php) - login and registration screen
- [login.php](login.php) - login processing and role-based redirects
- [registration.php](registration.php) - account creation
- [html/forgot-password.php](html/forgot-password.php) - password reset request form
- [html/reset-password.php](html/reset-password.php) - reset password form

---

## 🧱 Project Structure

- [html/applicants-pages/](html/applicants-pages/) - applicant dashboard and application pages
- [html/headstaff-pages/](html/headstaff-pages/) - head staff tools and staff management pages
- [html/scholars-pages/](html/scholars-pages/) - scholar-facing pages
- [html/staffs-pages/](html/staffs-pages/) - staff-facing pages
- [php/](php/) - backend helpers for categories, documents, uploads, and announcements
- [script/](script/) - client-side JavaScript for validation and UI interactions
- [styles/](styles/) - CSS files for layout and page styling
- [img/](img/) - logos, icons, and uploaded image assets

---

## 📝 Notes

- Some paths in the current codebase are hard-coded for local development, so adjust them if you deploy the project under a different folder name.
- The password reset flow stores a token hash in the database and sends a reset link by email.
- Keep SMTP credentials out of version control if you plan to publish the project.
