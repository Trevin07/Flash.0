<?php
session_start();
include('db_connect.php'); // Ensure this file contains correct database connection details

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Successful login
        $user = $result->fetch_assoc();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $user['role']; // Assuming 'role' is a column in your users table

        // Redirect based on user role
        if ($user['role'] === 'admin') {
            header('Location: http://localhost:81/phpmyadmin/index.php?route=/sql&pos=0&db=flash0&table=users'); // Update with your actual phpMyAdmin URL
        } else {
            header('Location: functionalities.html');
        }
        exit();
    } else {
        // Redirect to login page with error
        header('Location: login.html?error=1');
        exit();
    }
}
?>