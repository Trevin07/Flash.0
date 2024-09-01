<?php
include 'db_connect.php'; // Database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
    if (mysqli_query($conn, $query)) {
        echo "User added successfully.";
    } else {
        echo "Error adding user: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <button type="submit">Add User</button>
</form>
