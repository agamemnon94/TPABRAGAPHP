<?php
session_start();
if (!$_SESSION['password']) {
  header('location: http://localhost/TPABRAGAPHP/conn_success.php');
}
if (!empty($_SESSION['nom'])) {
  $user = $_SESSION['nom'];
} else {
  $user = "Visiteur";
}

// echo "<pre>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo print_r($_SESSION);
// echo "<br>";
// echo "<br>";
// echo $_SESSION['nom'];
// echo "</pre>";

$cosmetique = ["parfums", "maquillages", "soins"];
$mode = ["sacs", "accessoires", "lunettes", "prêt-à-porter"];
$horlogerie = ["j12", "première", "code coco"];

$channel = [
  "cosmetique" =>  $cosmetique,
  "mode" => $mode,
  "horlogerie" => $horlogerie
];

// $channel = [
//   "cosmetique" => ["parfums", "maquillages", "soins"],
//   "mode" => ["sacs", "accessoires", "lunettes", "prêt-à-porter"],
//   "horlogerie" => ["j12", "première", "code coco"]
// ];


// echo "<pre>";
// echo print_r($channel);
// echo "</pre>";

// echo "<br>";
// echo "<br>";
// echo var_dump($channel);
















require "templates/accueil.phtml";
