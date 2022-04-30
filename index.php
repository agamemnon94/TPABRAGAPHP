<?php
session_start();
// if (!$_SESSION['password']) {
//   header('location: http://localhost/TPABRAGAPHP/conn_success.php');
// }
if (!empty($_SESSION['nom'])) {
  $user = $_SESSION['nom'];
} else {
  $user = "Visiteur";
}


$cosmetique = ["parfums", "maquillages", "soins"];
$mode = ["sacs", "accessoires", "lunettes", "prêt-à-porter"];
$horlogerie = ["j12", "première", "code coco"];

$channel = [
  "cosmetique" =>  $cosmetique,
  "mode" => $mode,
  "horlogerie" => $horlogerie
];


require "templates/accueil.phtml";

// depuis la console (ctrl + ù)
// php -S localhost:8000
// Pour lancer le projet dans localhost