<?php
session_start();

// Check if the user is an admin
if ($_SESSION['username'] != 'admin') { // Assuming 'admin' is the username for admin
    header("Location: login.html");
    exit();
}

// Include database connection
include 'db_connect.php';

// Fetch messages from the database
$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");

echo "<h1>Messages from Users</h1>";
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>" . $row['username'] . ":</strong> " . $row['message'] . " <em>(" . $row['created_at'] . ")</em></p>";
}

// Close the connection
$conn->close();
?>
