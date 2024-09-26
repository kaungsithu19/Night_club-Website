# Night Club Website Project - README

## Project Overview
This project is a Night Club Management website that allows both administrators and customers to interact with the system in different ways. It provides a platform to manage events, artists, and members, with separate interfaces for admins and customers. The site is built using HTML, CSS, PHP, JavaScript, and SQL for backend database management.

### Features
#### Admin Dashboard:
- **Add an Event:** Admins can add upcoming events, including details like event name, date, time, and description.
- **Edit/Delete an Event:** Admins can update or remove events as necessary.
- **Add an Artist:** Admins can add artists to the system, assigning them to specific events or adding general artist information.
- **Manage Members:** Admins can add, edit, or delete members who will have access to the admin panel.

#### Customer Dashboard:
- **View Upcoming Events:** Customers can browse through a list of upcoming events.
- **View Past Events:** Customers can view past events and check their details.
- **View Artists:** Customers can explore a list of artists, including those who are performing at the club.

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP, SQL (for data storage)
- **Database:** SQL database to store events, artists, and member information.

## Project Setup

### Requirements
- A web server (e.g., Apache, Nginx) with PHP support.
- A database server (e.g., MySQL, MariaDB).
- Basic web browser (Google Chrome, Firefox, etc.).

### Requirements
- A local web server environment like **XAMPP**.
- A database server (e.g., MySQL) for handling SQL queries.
- A web browser (Google Chrome, Firefox, etc.).

### Installation Steps
1. **Download and Install XAMPP:**
   - Download XAMPP from the [official XAMPP website](https://www.apachefriends.org/download.html) and install it on your local machine.
   - Start **Apache** and **MySQL** services from the XAMPP Control Panel.

2. **Set up the database:**
   - Open **phpMyAdmin** in your browser by navigating to `http://localhost/phpmyadmin/`.
   - Import the `nightclub.sql` file into your MySQL database server to set up the required tables. This includes tables for events, artists, and admin members.

3. **Configure the database connection:**
   - Open the `config.php` file located in the `config/` folder.
   - Update the database host, username, password, and database name to match your environment. The default values for XAMPP are typically:
     ```php
     <?php
     $db_host = 'localhost';
     $db_user = 'root';
     $db_password = '';
     $db_name = 'nightclub_db';
     ?>
     ```

4. **Deploy the project in XAMPP:**
   - Copy the `club` folder into the `htdocs` folder of your XAMPP installation (usually located in `C:\xampp\htdocs` on Windows).
   - Access the project by navigating to `http://localhost/club/` in your web browser.


## Project Implementation Guide

To implement the project successfully, follow these steps:

1. **Download the SQL Sources**:
   - Import the `nightclub.sql` file into your MySQL database through **phpMyAdmin** to set up the required tables. This includes tables for events, artists, and admin members.

2. **Download the Club Folder**:
   - The main project files are located inside the `club` folder.
   - In the `club` folder, you will find two subfolders:
     - **img**: This folder contains all the images used in the website.
     - **admin**: This folder contains all the PHP files related to the admin dashboard.
   - **Important**: Make sure to include the `img` folder when deploying the project to ensure the full functionality of the website, as images are essential for both the admin and customer dashboards.

3. **PHP Files in the Club Folder**:
   - The PHP files in the main `club` folder are designed for the **customer dashboard**, where users can:
     - View **upcoming events**.
     - Check **past events**.
     - See the list of **artists** performing at the club.

4. **PHP Files in the Admin Folder (Subfolder of Club)**:
   - The `admin` subfolder contains PHP files that allow the administrator to:
     - **Add/Edit/Delete Events**.
     - **Add/Edit/Delete Artists**.
     - **Add New Admins** to manage the website.
   - Admins must be logged in to access these functionalities through the admin dashboard.

5. **Website Version**:
   - After following these steps, ensure that both customer and admin functionalities work correctly, and all media from the `img` folder loads properly to get the full version of the website.

## Usage

### Admin Panel:
- **Login:** Admin users can log in to the admin panel using their credentials.
- **Add/Edit/Delete Event:** Navigate to the "Manage Events" section to add new events, edit existing ones, or delete them.
- **Add Artist:** Use the "Manage Artists" section to add new artists who will perform at the club.
- **Manage Admin Members:** Add or remove members from the admin panel.

### Customer Dashboard:
- **Upcoming Events:** View a list of upcoming events on the main customer page.
- **Past Events:** Access past event information.
- **Artists:** Browse through the list of artists performing at the club.

