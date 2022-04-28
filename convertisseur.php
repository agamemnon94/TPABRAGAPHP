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
  if ($_GET['unit'] == "Fah") {
    $convResult = (htmlentities($_GET['temp']) * (9 / 5) + 32) . " °";
  } else {
    $convResult = (htmlentities($_GET['temp'])  + 273.15) . " °";
  }
}

// Sécuriser avec "is_numeric
// J'ai problème avec la valeur "0" qui n'est pas prise en compte
// Réglé avec !is_null


// Essayer de créer une fonction pour réaliser l'opération de conversion
// function convert()
// {

// if (isset($_GET)) {
//   if (!empty($_GET['unit']) && !is_null($_GET['temp']) && is_numeric($_GET['temp'])) {
//     $unit = htmlentities($_GET['unit']);
//     $celsius = htmlentities($_GET['temp']);
//     converCelsius($unit, $celsius);
//   }
// }
// function converCelsius($unit, $celsius)
// {
//   if ($unit == "fah") {
//     $resultat = ($celsius * (9 / 5) + 32) . " °F";
//     return $resultat;
//   } elseif ($unit == "kel") {
//     $resultat = ($celsius + 273.15) / " °K";
//     return $resultat;
//   } else {
//     return 0;
//   }
// }














require "templates/convertisseur.phtml";
