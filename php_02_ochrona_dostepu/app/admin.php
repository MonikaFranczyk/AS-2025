<?php
$admin_only = true;
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Panel administratora</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Panel administratora</a>
    <a href="<?php print(_APP_URL); ?>/app/menu.php" class="btn btn-light">Powrót</a>
  </div>
</nav>

<div class="container mt-4">
    <h3>Witaj, administratorze!</h3>
    <p>Tu możesz dodać przyszłe funkcje panelu admina.</p>
</div>

</body>
</html>