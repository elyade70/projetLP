<?php

session_start();
if ($_SESSION['id_ut'] !=null) {
    header("Location:../controller/connexion.php");
} else {
    $id_ut = $_SESSION['id_ut'];
}
require_once "../Model/BDD.php";
$bdd = new Bdd();
$user = $bdd->getUser($id_ut);


if (isset($_POST['entreetexte'])) {
    $texte = $_POST['entreetexte'];
  $evenement=$bdd-> rechercheDansEvenement($texte);
  $nombreResultats = count($evenement);

}
require "../View/resultatrecherche.php";

?>