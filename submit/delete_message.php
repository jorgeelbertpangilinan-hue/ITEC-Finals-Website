<?php
include 'db_connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM messages WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<div class='container'>
            <h2>🗑️ Message Deleted!</h2>
            <a href='view_messages.php'>Back to Messages</a>
          </div>";
} else {
    echo "<div class='container error'>❌ Error deleting message: " . $conn->error . "</div>";
}
$conn->close();
?>

