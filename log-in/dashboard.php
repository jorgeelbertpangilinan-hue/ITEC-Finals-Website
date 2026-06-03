<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="project.css">
    <title>Dashboard</title>
</head>
<body class="dashboard">
    <div class="container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <br>

    <div class="dashboardButtonContainer">
    <a href="index.php" class="dashboardButton">Continue to the Freedom Wall</a>
</div>
    </div>
</body>
</html>
