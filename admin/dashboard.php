<?php
session_start();

// Assuming user is authenticated as an admin
if(!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// Admin Dashboard Content
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Assuming you have a styles.css -->
</head>
<body>
    <header>
        <h1>Welcome to the Admin Dashboard</h1>
        <nav>
            <ul>
                <li><a href="manage_users.php">Manage Users</a></li>
                <li><a href="view_bookings.php">View Bookings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Dashboard Overview</h2>
        <p>Here you can manage the hostel and view all the necessary information.</p>
    </main>
</body>
</html>