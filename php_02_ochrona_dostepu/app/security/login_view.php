<?php require_once dirname(__FILE__).'/../../config.php'; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kalkulator</a>
  </div>
</nav>

<div class="container mt-5">
  <div class="card shadow-sm mx-auto" style="max-width: 400px;">
    <div class="card-body">
      <h4 class="card-title text-center mb-4">Logowanie</h4>

      <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
        <div class="mb-3">
          <label for="login" class="form-label">Login:</label>
          <input type="text" class="form-control" name="login" id="login" required>
        </div>
        <div class="mb-3">
          <label for="pass" class="form-label">Hasło:</label>
          <input type="password" class="form-control" name="pass" id="pass" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Zaloguj</button>
      </form>

      <?php
      if (isset($messages) && count($messages) > 0) {
          echo '<div class="alert alert-danger mt-3"><ul>';
          foreach ($messages as $msg) echo "<li>$msg</li>";
          echo '</ul></div>';
      }
      ?>
    </div>
  </div>
</div>
</body>
</html>

