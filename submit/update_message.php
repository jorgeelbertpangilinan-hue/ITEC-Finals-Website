<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $user = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['message']);

    $sql = "UPDATE messages SET username='$user', email='$email', message='$msg' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'>
                <h2>✅ Message Updated!</h2>
                <a href='view_messages.php'>Back to Messages</a>
              </div>";
    } else {
        echo "<div class='container error'>❌ Error updating message: " . $conn->error . "</div>";
    }
}
$conn->close();
?>

