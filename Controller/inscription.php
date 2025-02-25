<?php
require_once "../Model/BDD.php";


$bdd = new Bdd();

if (isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['pwd'])  && isset($_POST['email'])&& isset($_POST['date_naissance'])&& isset($_POST['telephone'])  ) {
 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $telephone = $_POST['telephone'];
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $user = $bdd->newuser($email, $pwd, $nom, $prenom, $date_naissance, $telephone);
    require "../View/valide.php";

} else {
    require "../View/inscription.php";
}