<?php
session_start();
if (!$_SESSION['password']) {
  header('location: http://localhost/TPABRAGAPHP/conn_success.php');
}

if (isset($_GET['unit']) && isset($_GET['temp']) && !is_null($_GET['temp']) && !empty($_GET['unit'])) {

  include "lib/convert_utils.php";

  $unit = htmlentities($_GET['unit']);
  $temp = htmlentities($_GET['temp']);

  $resultat = convertCelsius($unit, $temp);
}










require "templates/convertisseur.phtml";
