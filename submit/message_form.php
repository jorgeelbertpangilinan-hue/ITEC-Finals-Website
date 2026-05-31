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
  <header class="topbar" aria-label="Primary navigation">
        <div class="topbar-inner">
            <div class="brand">
                <a class="brand-link page-name" href="index.html">Freedom Wall</a>
            </div>

            <nav class="nav-links" role="navigation" aria-label="Main links">
                <a class="nav-link" href="submit.html">Submit</a>
                <a class="nav-link" href="results.html">Results</a>
                <a class="nav-link" href="feedback.html">Feedback</a>
            </nav>
        </div>
    </header>

  <div class="form-container">
    <h2>Freedom Wall</h2>
    <form action="submit_message.php" method="post">
      <label for="username">Nickname</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="message">Message</label>
      <textarea id="message" name="message" required></textarea>

      <button type="submit" class="submit-button btn">Submit</button>
    </form>
  </div>
</body>
</html>

