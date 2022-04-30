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
// ctrl + clic sur le lien ↓
// Sat Apr 30 09:20:11 2022] PHP 8.1.0 Development Server (http://localhost:8000) started
// Pour lancer le projet dans localhost dans le navigateur