<?php
session_start();


if (isset($_GET['valider'])) {
  if (!empty($_GET['nom'])  and !empty($_GET['password'])) {
    $mdp_saisi = htmlspecialchars($_GET['password']);
    $mdp_par_defaut = "123456";
    $user = htmlspecialchars($_GET['nom']);
    // $mdp_par_defaut =htmlentities($_GET['passeword']);
    // $mdp_par_defaut =htmlentities('123456);
    // $user =htmlentities($_GET['nom']);

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
