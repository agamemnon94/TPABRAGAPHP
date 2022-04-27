<?php

session_start();
if (!$_SESSION['password']) {
  header('location: http://localhost/TPABRAGAPHP/conn_success.php');
}
// echo "<pre>";
// echo print_r($_GET);
// echo "</pre>";

$convResult = '';


if (isset($_GET)) {
  if (!is_null($_GET['temp']) && !empty($_GET['unit']) && $_GET['unit'] !== 'defaut') {
    if ($_GET['unit'] == "Fah") {
      $convResult = htmlentities($_GET['temp']) * (9 / 5) + 32;
    } else {
      $convResult = htmlentities($_GET['temp'])  + 273.15;
    }
  }
}

// Sécuriser avec "isNAN
// J'ai problème avec la valeur "0" qui n'est pas prise en compte


// Essayer de créer une fonction pour réaliser l'opération de conversion
// function convert()
// {

// $temp = htmlentities($_GET['temp']);
// $unit = htmlentities($_GET['unit']);
// $fah = '';
// $Kel = '';
//if($unit="fah){
// $resultat = $temp * (9 / 5) + 32;
// return $resultat;

// }
//$resultat = $temp + 273.15;
// }

// convert($temp);


// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo $resultat;















require "templates/convertisseur.phtml";
