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

require "../View/index.php";
