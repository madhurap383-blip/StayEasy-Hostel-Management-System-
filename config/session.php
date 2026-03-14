<?php
session_start();

// Set session variables
$_SESSION['user_id'] = null;
$_SESSION['user_name'] = null;

// Function to check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']) && $_SESSION['user_id'] !== null;
}

// Function to log the user out
function logout() {
    session_destroy();
    header('Location: login.php'); // Redirect to login page
    exit;
}