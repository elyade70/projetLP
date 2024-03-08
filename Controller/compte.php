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


if (isset($_GET['achat'])) {
$achat=$bdd->getAchatByIdUser($id_ut);
$nombreResultatsAchat = count($achat);

}
if (isset($_GET['profil'])) {
    $userProfil = $bdd->getUser($id_ut);

    
    }
    if (isset($_GET['off'])) {
     session_destroy();
     header("refresh: 1;");
        
        }
    if (isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['pwd'])  && isset($_POST['email'])&& isset($_POST['date_naissance'])&& isset($_POST['telephone'])  ) {
 
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pwd = $_POST['pwd'];
        $email = $_POST['email'];
        $date_naissance = $_POST['date_naissance'];
        $telephone = $_POST['telephone'];

   $update=$bdd->updateUser($id_ut, $email, $pwd, $nom, $prenom, $date_naissance, $telephone);
    echo "<script>alert('informations validées avec succès');   location.replace('../controller/compte.php?profil=true')</script>";
   // header("Location:../controller/compte.php");

    }
require "../View/compte.php";
