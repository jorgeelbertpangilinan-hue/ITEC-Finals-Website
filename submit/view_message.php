<?php
include 'db_connect.php';

$sql = "SELECT id, username, email, message, created_at FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Freedom Wall Messages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="message_form.php">Post a Message</a>
    <a href="view_messages.php">View Messages</a>
  </nav>

  <h2>Freedom Wall Messages</h2>
  <?php
  if ($result && $result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          echo "<div class='message'>
                  <p><strong>" . htmlspecialchars($row["username"]) . "</strong> (" 
                  . htmlspecialchars($row["email"]) . ")</p>
                  <p>" . nl2br(htmlspecialchars($row["message"])) . "</p>
                  <p><em>" . $row["created_at"] . "</em></p>
                  <a href='edit_message.php?id=" . $row["id"] . "' class='btn'>Edit</a>
                  <a href='delete_message.php?id=" . $row["id"] . "' 
                     class='btn delete' 
                     onclick=\"return confirm('Are you sure you want to delete this message?');\">
                     Delete
                  </a>
                </div>";
      }
  } else {
      echo "<p style='text-align:center;'>No messages yet.</p>";
  }
  $conn->close();
  ?>
</body>
</html>

