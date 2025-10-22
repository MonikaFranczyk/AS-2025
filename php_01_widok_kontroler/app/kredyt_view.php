<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>
	<h2>Kalkulator kredytowy</h2>

<form action="<?php print(_APP_URL);?>/app/kredyt.php" method="post">
	<label> Kwota kredytu: </label>
	<input type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" /><br/>
	<label> Liczba lat: </label>
	<input type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" /><br/>
	<label> Oprocentowanie: </label>
	<input type="text" name="oprocentowanie" value="<?php if (isset($oprocentowanie)) print($oprocentowanie); ?>" /><br/>
	<input type="submit" value="Oblicz ratę" />
</form>	

<?php
    if (isset($messages) && count($messages) > 0) {
        echo '<ol style="background:#f88; padding:10px; width:300px;">';
        foreach ($messages as $msg) echo '<li>'.$msg.'</li>';
        echo '</ol>';
    }

    if (isset($rata)) {
        echo '<div style="background:#ff0; padding:10px; width:300px;">';
        echo 'Miesięczna rata: '.number_format($rata, 2).' zł';
        echo '</div>';
    }
    ?>

	<p><a href="<?php print(_APP_URL); ?>/app/calc_view.php">Przejdź do zwykłego kalkulatora </a></p>

</body>
</html>