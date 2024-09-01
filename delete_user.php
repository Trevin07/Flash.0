<?php
include 'db_connect.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    $query = "DELETE FROM users WHERE username='$username'";
    if (mysqli_query($conn, $query)) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username to delete" required>
    <button type="submit">Delete User</button>
</form>
