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



if (isset($_GET['achats'])) {
    $achats=$bdd->getAllAchatsAndInfo();
    
    }
    if (isset($_GET['user'])) {
        $users = $bdd->getAllUser();
    
        
        }
    if (isset($_GET['eve'])) {
        $evenements = $bdd->getEvenement();    
        
        }
      
    if (isset($_GET['cat'])) {
        $categories = $bdd->getCategories();
    
        
        }
        
require "../View/admin.php";