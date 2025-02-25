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
$achatvalid=false;

if (isset($_GET['id']) && isset($_GET['prix']) && isset($_GET['qte'])) {

    $id = $_GET['id'];
    $prix = $_GET['prix'];
    $qte = $_GET['qte'];

    $nbPlaceAchetes = $bdd->getNombrePlaceAchete($id);
    $evenement = $bdd->getOneEvenementById($id);

    if (is_array($nbPlaceAchetes) || is_object($nbPlaceAchetes)) {
        foreach ($nbPlaceAchetes as $nbpa) {

            if (is_array($evenement) || is_object($evenement)) {
                foreach ($evenement as $eve) {
                    if ($qte + $nbpa['nbPlaceAchete'] > $eve['nombrePlaceMaximum']) {
                        echo "pas bon";
                    
                    } else {
                        $achat = $bdd->creerAchat($qte, $id_ut, $id);
                        $achatvalid=true;


                    }

                }
            }
        }
    }
} else {
    echo var_dump($_GET);
    echo "a";

    // header('Location: ../Controller/categories.php');
}
require "../View/achat.php";