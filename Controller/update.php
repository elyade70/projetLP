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


if (isset($_GET["eveid"])) {
    $ideve = $_GET["eveid"];
    $evenements = $bdd->getOneEvenementById($ideve);
}
if (isset($_POST['idevenement']) && isset($_POST['libelle']) && isset($_POST['date']) && isset($_POST['lieu']) && isset($_POST['heureDebut']) && isset($_POST['heureFin']) && isset($_POST['agemini']) && isset($_POST['prix']) && isset($_POST['nombrePlace']) && isset($_POST['fkcategorie']) && isset($_POST['detail'])) {

 
    $ideve = $_POST['idevenement'];
    $libelle = $_POST['libelle'];
    $date = $_POST['date'];
    $heureDebut = $_POST['heureDebut'];
    $heureFin = $_POST['heureFin'];
    $lieu = $_POST['lieu'];
    $agemini = $_POST['agemini'];
    $prix = $_POST['prix'];
    $nombrePlace = $_POST['nombrePlace'];
    $fkcategorie = $_POST['fkcategorie'];
    $detail = $_POST['detail'];
    

    $update= $bdd->updateEvent( $ideve,$libelle,$detail,$date, $heureDebut, $heureFin, $lieu, $agemini, $prix, $nombrePlace,$fkcategorie);
  var_dump($update);
}


require "../View/update.php";