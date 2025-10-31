<?php require_once dirname(__FILE__).'/../config.php'; ?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Kalkulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kalkulator</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="<?php print(_APP_URL); ?>/app/menu.php">Menu główne</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php print(_APP_URL); ?>/app/security/logout.php">Wyloguj</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-4">
  <div class="card mx-auto" style="max-width: 400px;">
    <div class="card-body">
      <h4 class="card-title mb-4">Kalkulator</h4>
      <form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
        <div class="mb-3">
          <label>Liczba 1:</label>
          <input type="text" class="form-control" name="x" value="<?php if (isset($x)) print($x); ?>">
        </div>
        <div class="mb-3">
          <label>Operacja:</label>
          <select name="op" class="form-select">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="times">*</option>
            <option value="div">/</option>
          </select>
        </div>
        <div class="mb-3">
          <label>Liczba 2:</label>
          <input type="text" class="form-control" name="y" value="<?php if (isset($y)) print($y); ?>">
        </div>
        <button type="submit" class="btn btn-primary w-100">Oblicz</button>
      </form>

      <?php
      if (isset($messages) && count($messages) > 0) {
          echo '<div class="alert alert-danger mt-3"><ul>';
          foreach ($messages as $msg) echo "<li>$msg</li>";
          echo '</ul></div>';
      }

      if (isset($result)) {
          echo '<div class="alert alert-success mt-3">Wynik: '.$result.'</div>';
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>
