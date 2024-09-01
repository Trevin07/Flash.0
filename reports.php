<?php
include 'db_connect.php'; // Database connection file

$query = "SELECT role, COUNT(*) AS user_count FROM users GROUP BY role";
$result = mysqli_query($conn, $query);

echo "<h1>User Role Report</h1>";
echo "<table border='1'>";
echo "<tr><th>Role</th><th>Count</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['role']}</td><td>{$row['user_count']}</td></tr>";
}

echo "</table>";
?>
