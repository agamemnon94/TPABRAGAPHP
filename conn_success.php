<?php
session_start();


if (isset($_GET['valider'])) {
  if (!empty($_GET['nom'])  and !empty($_GET['password'])) {
    $mdp_par_defaut = "123456";
    $user = $_GET['nom'];
    // $pseudo_saisi = htmlspecialchars($_GET['nom']);
    $mdp_saisi = htmlspecialchars($_GET['password']);

    if ($mdp_saisi == $mdp_par_defaut) {
      $_SESSION['password'] = $mdp_saisi;
      $_SESSION['nom'] = $user;
      header('location: http://localhost/TPABRAGAPHP/index.php');
      // echo "Bonjour " . $_GET['nom'];
    } else {
      echo "Les valeurs entrées sont incorrectes";
    }
  } else {
    header('location: http://localhost/TPABRAGAPHP/conn_success.php');
  }
}







require "templates/connexion.phtml";
