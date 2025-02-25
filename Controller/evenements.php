<?php



require_once "../Model/BDD.php";
$bdd = new Bdd();

$categories = $bdd->getCategories();

//$oneCategorie = $bdd->getOneCategorie();

require "../View/allevenement.php";

if (isset($_POST['idcategorie'])) {
    $idcategorie = $_POST['idcategorie'];
    $oneCategorie =$bdd->getOneCategorieByID($idcategorie);
}
