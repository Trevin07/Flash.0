<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}

// Include database connection
include 'db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST['message'];
    $username = $_SESSION['username']; // Get the logged-in user's username

    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $message);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
