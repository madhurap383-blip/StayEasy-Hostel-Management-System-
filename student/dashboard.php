<?php
// student/dashboard.php

// Starting session
session_start();

// Include database connection
include_once('../config/db.php');

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user info
$query = "SELECT * FROM students WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user_info = $result->fetch_assoc();

// HTML content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($user_info['name']); ?></h1>
    <p>Email: <?php echo htmlspecialchars($user_info['email']); ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
