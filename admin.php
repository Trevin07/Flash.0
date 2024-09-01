<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: login.html'); // Redirect to login if not an admin
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Flash.0</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <p>Welcome, Admin! Here you can manage users, view reports, and access phpMyAdmin.</p>
    
    <!-- Admin navigation options -->
    <nav>
        <a href="add_user.php">Add User</a>
        <a href="delete_user.php">Delete User</a>
        <a href="edit_user.php">Edit User</a>
        <a href="reports.php">View Reports</a>
        <!-- Link to phpMyAdmin -->
        <a href="http://localhost:81/phpmyadmin" target="_blank">Access phpMyAdmin</a>
    </nav>
</body>
</html>
