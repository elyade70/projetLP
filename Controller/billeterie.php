<?php
session_start();
if (empty($_SESSION['id_ut'])) {
    header("Location:../controller/connexion.php");
} else {
    $id_ut = $_SESSION['id_ut'];
}

require_once "../Model/BDD.php";
$bdd = new Bdd();


if (isset($_GET['idevenement'])) {
    $idevenement=$_GET['idevenement'];
    $evenement =$bdd->getOneEvenementById($idevenement);
    $nbPlaceRestante =$bdd->getnbPlaceRestante($idevenement);
    $nbPlaceAchetes =$bdd->getNombrePlaceAchete($idevenement);
    
}
else{
    header('Location: ../Controller/categories.php');
}
require "../View/billeterie.php";