<?php

session_start();
if (!$_SESSION['password']) {
  header('location: http://localhost/TPABRAGAPHP/conn_success.php');
}
// echo "<pre>";
// echo print_r($_GET);
// echo "</pre>";

$convResult = '';


if (!empty($_GET['unit']) && !is_null($_GET['temp'])) {
  if ($_GET['unit'] == "fah") {
    $convResult = (htmlentities($_GET['temp']) * (9 / 5) + 32) . " °";
  } else {
    $convResult = (htmlentities($_GET['temp'])  + 273.15) . " °";
  }
}

// Sécuriser avec "is_numeric
// J'ai problème avec la valeur "0" qui n'est pas prise en compte
// Réglé avec !is_null





require "templates/convertisseur.phtml";
