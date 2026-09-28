# 🩸 Blood Bank and Donor Manager

A web-based **Blood Bank and Donor Management System** developed to simplify the management of blood donors, blood camps, donor searches, and blood bank-related information.

The system provides a user-friendly interface for managing donor information and helping users find suitable blood donors based on their requirements.

---

## 🌐 Project Overview

The **Blood Bank and Donor Manager (BBDM)** is designed to provide a centralized platform for managing blood donor information and blood bank activities.

The application includes features for:

* Donor registration
* Searching for blood donors
* Blood donation camps
* Contact and enquiry management
* Donor information management
* Administrative management
* Blood bank-related information

---

## 🚀 Features

### 👤 Donor Management

* Donor registration
* Donor information management
* Donor search functionality
* Blood group-based donor search

### 🩸 Blood Donation

* Blood donation information
* Donation camp information
* Become a donor functionality
* Blood availability-related information

### 🔎 Donor Search

Users can search for donors based on available donor information and requirements.

### 🛠️ Admin Panel

The project includes an administrative section for managing application-related information and records.

### 📩 Contact

Users can submit enquiries and contact information through the contact functionality.

---

## 🛠️ Technologies Used

### Frontend

* HTML5
* CSS3
* JavaScript
* Bootstrap

### Backend

* PHP

### Database

* MySQL

### Other

* SQL
* jQuery
* Gulp
* Vendor libraries

---

## 📂 Project Structure

```text
BBDM/
│
├── admin/
│   └── Admin panel files
│
├── css/
│   └── Stylesheets
│
├── images/
│   └── Project images and assets
│
├── includes/
│   └── Reusable PHP components
│
├── js/
│   └── JavaScript files
│
├── mail/
│   └── Mail-related files
│
├── vendor/
│   └── Third-party libraries
│
├── SQL File/
│   └── Database SQL files
│
├── become-donar.php
├── camps.php
├── contact.php
├── index.php
├── page.php
├── search-donor.php
├── gulpfile.js
└── README.md
```

---

## ⚙️ How to Run the Project Locally

### 1. Install XAMPP

Install **XAMPP** with Apache and MySQL.

### 2. Clone the Repository

```bash
git clone https://github.com/Anishhkumarr/BBDM.git
```

### 3. Move the Project

Copy the project into the XAMPP `htdocs` directory:

```text
C:\xampp\htdocs\BBDM
```

### 4. Start XAMPP

Start:

```text
Apache
MySQL
```

from the XAMPP Control Panel.

### 5. Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create a database for the project.

Import the SQL file provided in the:

```text
SQL File/
```

directory.

### 6. Configure the Database

Update the PHP database configuration according to your local MySQL credentials.

Example:

```php
$host = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";
```

### 7. Run the Application

Open:

```text
http://localhost/BBDM/
```

The Blood Bank and Donor Manager application should now be available in your browser.

---

## 📸 Application Screenshots

Add screenshots of the main pages here.

### Home Page

![Home Page](images/home.png)

### Donor Registration

![Donor Registration](images/donor-registration.png)

### Search Donor

![Search Donor](images/search-donor.png)

### Blood Donation Camps

![Blood Camps](images/blood-camps.png)

### Admin Dashboard

![Admin Dashboard](images/admin-dashboard.png)

> Replace the image paths above with the actual screenshot filenames in your repository.

---

## 🎯 Project Objectives

The main objectives of the project are:

* To maintain donor information digitally.
* To make donor searching easier.
* To provide information about blood donation camps.
* To reduce dependency on manual donor records.
* To provide a centralized platform for blood bank-related information.
* To improve accessibility of donor information.

---

## 🔄 Basic Workflow

```text
User
  │
  ├── Browse Blood Bank Information
  │
  ├── Register as Donor
  │
  ├── Search for Donor
  │
  ├── View Donation Camps
  │
  └── Contact Blood Bank
           │
           ▼
      PHP Application
           │
           ▼
        MySQL
           │
           ▼
      Donor Records
```

---

## 🔐 Admin Module

The administrative section allows authorized administrators to manage application-related information and donor records.

The admin module is separated from the public-facing pages of the application.

---

## 📌 Future Enhancements

Possible improvements for future versions include:

* OTP/email verification for donors
* Real-time blood availability
* Donor location-based search
* Email/SMS notifications
* Donor eligibility tracking
* Blood inventory management
* Improved authentication and authorization
* Responsive dashboard with analytics
* REST API integration

---

## 👨‍💻 Developer

**Anish Kahar**

MCA Student | Full Stack Developer

### Technologies

`Java` `Spring Boot` `Angular` `JavaScript` `PHP` `SQL` `MySQL`

### Portfolio

🌐 https://anish-kahar-portfolio.vercel.app/

---

## ⭐ Support

If you find this project useful, consider giving the repository a ⭐ on GitHub.

---

### 📄 License

This project is intended for educational and portfolio purposes.
