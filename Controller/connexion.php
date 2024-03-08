<?php



require_once "../Model/BDD.php";
$bdd = new Bdd();



require "../View/connexion.php";


if (isset($_POST['email']) && isset($_POST['pwd'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $con = $bdd->connexion($email, $pwd);
    if ($con == true) {
        session_start();
        foreach ($con as $user) {
            $_SESSION = [
                'id_ut' => $user['id_utilisateur'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom']
            ];
        }

        header("Location:../Controller/accueil.php");
    } else {
        echo '<script>alert("Les identifiants saisis sont incorrects")</script>';

        //header("Location:../controller/connexion.php");
        
    }
}