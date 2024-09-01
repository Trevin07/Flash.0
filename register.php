<?php
include 'db_connect.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', 'user')";
    if (mysqli_query($conn, $query)) {
        echo "Registration successful.";
    } else {
        echo "Error registering user: " . mysqli_error($conn);
    }
}
?>
