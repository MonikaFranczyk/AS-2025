<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Menu główne</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kalkulator</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Wyloguj</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 text-center">
  <h2>Witaj w systemie kalkulatorów!</h2>
  <p>Wybierz rodzaj kalkulatora:</p>
  <a href="<?php print(_APP_URL); ?>/app/calc.php" class="btn btn-primary m-2">Zwykły kalkulator</a>
  <a href="<?php print(_APP_URL); ?>/app/kredyt.php" class="btn btn-success m-2">Kalkulator kredytowy</a>
</div>

</body>
</html>
