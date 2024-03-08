<?php
session_start();
if (empty($_SESSION['id_ut'])) {
    header("Location:../controller/connexion.php");
} else {
    $id_ut = $_SESSION['id_ut'];
}
require_once "../Model/BDD.php";
$bdd = new Bdd();
$user = $bdd->getUser($id_ut);


if (isset($_GET['id'] ) && isset($_GET['prix'] ) && isset($_GET['qte'] ) ) {

    $id= $_GET['id'] ;
    $prix= $_GET['prix']; 
     $qte= $_GET['qte'];

    //  echo $id ;
    // echo $prix;
    // echo $qte;
    $evenement=$bdd->getOneEvenementById($id);
   $achat= $bdd->creerAchat($qte, $id_ut, $id);
}
else{
    echo var_dump($_GET);
    echo "a";

   // header('Location: ../Controller/categories.php');
}
require "../View/achat.php";