<?php

 session_start();

require_once "../Model/BDD.php";
$bdd = new Bdd();





if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $con = $bdd->connexion($email, $pwd);
var_dump($con);

if ($_SESSION['id_ut'] =!null) {
    echo 0;

}
if (!empty($con)) {
    echo 11;

    //
        foreach ($con as $user) {
            $_SESSION['id_ut'] = $user['id_utilisateur'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            if ($_SESSION['id_ut'] !=null) {

            //echo  $_SESSION['id_ut'] ;
            }
        }

      header("Location:../Controller/accueil.php");
    } else {
        echo '<script>alert("Les identifiants saisis sont incorrects")</script>';

        //header("Location:../controller/connexion.php");
        
    }
}
require "../View/connexion.php";
