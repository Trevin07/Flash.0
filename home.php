<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Flash</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>This is the home page of the Flash web application.</p>
    
    <!-- Navigation -->
    <div class="nav-buttons">
        <button onclick="window.location.href='functionalities.php'">Functionalities</button>
        <button onclick="window.location.href='support.php'">Support</button>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>
