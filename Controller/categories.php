<?php
session_start();
if (empty($_SESSION['id_ut'])) {
    header("Location:../controller/connexion.php");
} else {
    $id_ut = $_SESSION['id_ut'];
}


require_once "../Model/BDD.php";
$bdd = new Bdd();

$categories = $bdd->getCategories();
$user = $bdd->getUser($id_ut);

//$oneCategorie = $bdd->getOneCategorie();

require "../View/categories.php";

if (isset($_GET['idcategorie'])) {
    $idcategorie = $_POST['idcategorie'];
    $oneCategorie =$bdd->getOneCategorieByID($idcategorie);
}
