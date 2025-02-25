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


if (isset($_GET['idcategorie'])) {
    $idcategorie = $_GET['idcategorie'];
    $evenements =$bdd->getEvenemenentByIdCategorie($idcategorie);
}
require "../View/evenements.php";
