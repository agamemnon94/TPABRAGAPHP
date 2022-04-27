<?php

// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";
// $firstname = $_POST['firstname'] . "<br>";
// $name = $_POST['name'];
// $email = $_POST['email'];
// $majeur = $_POST['majeur'];

// echo $majeur;

//Création d'un nouveau fichier pour chaque requête user

//Ajouter le timestamp au nom de fichier
$tsp = strtotime('now');
// echo $tsp;

//récupérer la date et heure du jour
$maDate = date("D d M Y H:i:s");

// Préparer le nom du fichier

// Créer le fichier avec le prénom et le timestamp


if (isset($_POST) && !empty($_POST)) {

  // $firstname = $_POST['firstname'] . "<br>";
  // $name = $_POST['name'];
  // $email = $_POST['email'];
  $majeur = $_POST['majeur'];

  $newFileName = $_POST['firstname']  . "_" . $tsp;

  $demandeInscription = fopen("demandes_inscription/$newFileName.txt", "a+");

  //Écrire dans le fichier au moment de sa création.
  fwrite($demandeInscription, "Demande d'inscription de " . $_POST['firstname'] . " au " . $maDate . "\n");

  fwrite($demandeInscription, "Nom : " . $_POST['name'] . "\n");

  fwrite($demandeInscription, "email : " . $_POST['email'] . "\n");

  // J'utilise la variable créee pour renseigner l'état de majorité du user
  //Les variables ne sont pas utiles dans le cas présent
  fwrite($demandeInscription, "Majeur : " . $majeur . "\n");

  // Je n'ai pas rajouté le prénom car il est déjà évoqué en première ligne du fichier

  // Création d'une variable contenant un message qui indique au user si sa demande a été prise en compte ou non
  $demande = "Tu vas bientôt faire partie de la famille ;)";
} else {
  $demande = "Inscris toi ! ;)";
}












require "templates/inscription.phtml";
