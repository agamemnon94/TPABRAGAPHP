<?php

if (isset($_GET['unit']) && isset($_GET['temp']) && !is_null($_GET['temp']) && !empty($_GET['unit'])) {
  include "lib/convert_utils.php";

  $unit = htmlentities($_GET['unit']);
  $temp = htmlentities($_GET['temp']);

  $resultat = convertCelsius($unit, $temp);
}

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="www/main.css">
  <title>Convertisseur 2</title>
</head>

<body>
  <?php require "templates/header.phtml" ?>

  <form class="shine" action="convertisseur2.php" method="get">
    <div class="result">
      <?php if (isset($resultat)) : ?>
        <?= $resultat; ?>
      <?php endif; ?>
    </div>
    <label for="temp">Saisir une température</label>
    <input type="number" name="temp" value="">

    <select name="unit" id="unit">
      <option value="defaut">-- Choisir une unité --</option>
      <option value="fah">Fahrenheit</option>
      <option value="kel">Kelvin</option>
    </select>

    <button class=" btn shine" type="submit">Convertir</button>
  </form>

  <?php require "templates/footer.phtml" ?>
  <script src="script/main.js"></script>
</body>

</html>