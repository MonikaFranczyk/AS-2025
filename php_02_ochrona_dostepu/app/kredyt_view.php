<?php require_once dirname(__FILE__).'/../config.php'; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Kalkulator kredytowy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- 🔹 Pasek nawigacji -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kalkulator kredytowy</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="<?php print(_APP_URL); ?>/app/menu.php">Menu główne</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php print(_APP_URL); ?>/app/security/logout.php">Wyloguj</a></li>
    </ul>
  </div>
</nav>

<!-- 🔹 Zawartość strony -->
<div class="container mt-4">
  <div class="card mx-auto shadow-sm" style="max-width: 500px;">
    <div class="card-body">
      <h4 class="card-title mb-4 text-center">Kalkulator kredytowy</h4>

      <!-- Formularz -->
      <form action="<?php print(_APP_URL);?>/app/kredyt.php" method="post">
        <div class="mb-3">
          <label for="kwota" class="form-label">Kwota kredytu (PLN):</label>
          <input type="number" class="form-control" id="kwota" name="kwota" step="0.01"
                 value="<?php if (isset($kwota)) print($kwota); ?>" required>
        </div>

        <div class="mb-3">
          <label for="oprocentowanie" class="form-label">Oprocentowanie roczne (%):</label>
          <input type="number" class="form-control" id="oprocentowanie" name="oprocentowanie" step="0.01"
                 value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" required>
        </div>

        <div class="mb-3">
          <label for="miesiace" class="form-label">Liczba miesięcy spłaty:</label>
          <input type="number" class="form-control" id="miesiace" name="miesiace"
                 value="<?php if (isset($miesiace)) print($miesiace); ?>" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Oblicz ratę</button>
      </form>

      <!-- Komunikaty -->
      <?php
      if (isset($messages) && count($messages) > 0) {
          echo '<div class="alert alert-danger mt-3"><ul>';
          foreach ($messages as $msg) echo "<li>$msg</li>";
          echo '</ul></div>';
      }

      if (isset($result)) {
          echo '<div class="alert alert-success mt-3 text-center">';
          echo 'Miesięczna rata: <strong>'.number_format($result, 2, ',', ' ').' PLN</strong>';
          echo '</div>';
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>
