<?php
require_once __DIR__ . '/../SWD6.2_PHP/Testing.php';

// Simple routing: name parameter
$name = $_GET['name'] ?? null;

?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Simple PHP Demo</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Simple PHP Web App</h1>
      <p>Demo app that includes `SWD6.2_PHP/Testing.php` and renders a greeting.</p>
    </header>

    <main>
      <form method="get" action="/">
        <label for="name">Enter your name:</label>
        <input id="name" name="name" value="<?php echo htmlspecialchars($name ?? '', ENT_QUOTES, 'UTF-8'); ?>" />
        <button type="submit">Greet me</button>
      </form>

      <?php echo app_render_greeting($name); ?>
    </main>

    <footer>
      <small>Powered by PHP <?php echo PHP_VERSION; ?></small>
    </footer>
  </div>
</body>
</html>
