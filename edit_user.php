<?php
include 'db_connect.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];
    $new_role = $_POST['new_role'];

    $query = "UPDATE users SET password='$new_password', role='$new_role' WHERE username='$username'";
    if (mysqli_query($conn, $query)) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username to edit" required>
    <input type="password" name="new_password" placeholder="New Password">
    <select name="new_role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <button type="submit">Update User</button>
</form>
