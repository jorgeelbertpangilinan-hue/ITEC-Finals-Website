<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="submit.css">
  <title>Freedom Wall</title>
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

