<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['message']);

    $sql = "INSERT INTO messages (username, email, message) VALUES ('$user', '$email', '$msg')";
    $success = $conn->query($sql);
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Navigation Bar -->
  <nav>
    <a href="message_form.php">Post a Message</a>
    <a href="view_messages.php">View Messages</a>
  </nav>

  <div class="container">
    <?php if ($success): ?>
      <h2>✅ Message Submitted!</h2>
      <p>Thank you, <strong><?php echo $user; ?></strong>. Your message has been saved.</p>
      <a href="message_form.php">Post Another</a>
      <a href="view_messages.php">View Messages</a>
    <?php else: ?>
      <h2 class="error">❌ Error</h2>
      <p>There was a problem saving your message.<br>
         Please try again.</p>
      <a href="message_form.php">Back to Form</a>
    <?php endif; ?>
  </div>
</body>
</html>

