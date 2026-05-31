<?php
$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "";       // default for XAMPP
$dbname = "message_app_db"; // must match your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
?>

