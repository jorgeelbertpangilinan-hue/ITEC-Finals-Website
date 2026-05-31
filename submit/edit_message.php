<?php
include 'db_connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM messages WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Message</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="message_form.php">Post a Message</a>
    <a href="view_messages.php">View Messages</a>
  </nav>

  <div class="form-container">
    <h2>Edit Message</h2>
    <form action="update_message.php" method="post">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <label for="username">Nickname</label>
      <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required><?php echo htmlspecialchars($row['message']); ?></textarea>

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>

