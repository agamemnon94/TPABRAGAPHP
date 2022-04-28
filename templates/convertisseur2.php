<?php
include "../convert_utils.php";

if (isset($_GET['unit']) && isset($_GET['temp']) && !is_null($_GET['temp']) && !empty($_GET['unit'])) {

  $unit = htmlentities($_GET['unit']);
  $temp = htmlentities($_GET['temp']);


  $convResult = convertCelsius($temp);
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../www/main.css">
  <link rel="stylesheet" href="../www/header.css">
  <link rel="stylesheet" href="../www/footer.css">
  <title>Convertisseur</title>
</head>

<body>
  <?php require "../templates/header.phtml" ?>

  <form class="shine" action="" method="get">
    <div class="result" placeholder="Résultat">
      <?php if (isset($convResult)) : ?>
        <?= $convResult; ?>
      <?php endif; ?>
    </div>
    <label for="temp">Saisir une température</label>
    <input type="number" name="temp" value="">

    <select name="unit" id="">
      <option value="defaut">-- Choisir une unité --</option>
      <option value="Fah">Fahrenheit</option>
      <option value="Kel">Kelvin</option>
    </select>

    <button class=" btn shine" type="submit">Convertir</button>
  </form>

  <?php require "../templates/footer.phtml" ?>
  <script src="script/main.js"></script>
</body>

</html>