<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Freedom Wall</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <a href="message_form.php">Post a Message</a>
    <a href="view_messages.php">View Messages</a>
  </nav>

  <div class="form-container">
    <h2>Freedom Wall</h2>
    <form action="submit_message.php" method="post">
      <label for="username">Nickname</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>

