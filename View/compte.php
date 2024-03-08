<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compte</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../controller/compte.php?achat=true"><strong>Consulter vos achats</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controller/compte.php?profil=true"><strong>Votre profil</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../controller/compte.php?off=true"><strong>Déconnexion</strong></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <?php
  echo "<div class='all' style='display:flex;'>";
  if (isset($achat)) {


    if (is_array($achat) || is_object($achat)) {
      foreach ($achat as $ac) {

        if ($nombreResultatsAchat == 0) {
          echo ' <div class="alert alert-info" role="alert">';
          echo '  Aucun achat effectué';
          echo ' </div>';
        } else {

          echo '<div class="container" style="display: flex; justify-content: center; align-items: center; position: absolute; top: 8cm;">'; // Utilisation d'un conteneur flex pour centrer verticalement et horizontalement
          echo "<div class='row'>";
          echo '<div class="card" style="width: 18rem; ">';
          echo '<div class="card-header">';
          echo 'Evenements: ' . $ac['libelle'] . ' ';
          echo '</div>';
          echo '<ul class="list-group list-group-flush">';
          echo '<li class="list-group-item">Lieu: ' . $ac['lieu'] . ' </li>';
          echo '<li class="list-group-item">Date achat: ' . $ac['date_achat'] . ' </li>';
          echo '<li class="list-group-item">Quantité: ' . $ac['quantite'] . ' </li>';
          echo '<li class="list-group-item">Prix: ' . $ac['prix'] . ' € </li>';
          echo ' <li class="list-group-item"><a href="#" class="btn btn-info">Voir la reservation</a>  </li>';
         
          echo '</ul>';
        
          echo '</div>';
        
          echo '</div>'; // Fermeture du conteneur
        }

      }
    }
  }
  echo '</div>';
  if (isset($userProfil)) {



    if (is_array($userProfil) || is_object($userProfil)) {
      foreach ($userProfil as $us) {
        echo "<form method='post'> ";
        echo '<div class="container" style="display: flex; justify-content: center; align-items: center; position: absolute;left:10cm; top: 8cm; width:auto;">'; // Utilisation d'un conteneur flex pour centrer verticalement et horizontalement
        echo '<div class="card" style="width: 18rem;">';
        echo '  <label for="nom">Nom</label>';
        echo '<br>';
        echo '<input type="text" value=' . $us['nom'] . ' id="nom" name="nom">';
        echo '  <label for="prenom">Prenom</label>';
        echo '<br>';
        echo '<input type="text" value=' . $us['prenom'] . ' id="prenom" name="prenom">';
        echo '  <label for="email">Email</label>';
        echo '<br>';
        echo '<input type="email" value=' . $us['email'] . ' id="email" name="email">';
        echo '  <label for="date">Date de naissance</label>';
        echo '<br>';
        echo '<input type="date" value=' . $us['date_naissance'] . ' id="date" name="date_naissance">';
        echo '  <label for="mdp">Mot de passe</label>';
        echo '<br>';
        echo '<input type="text" value=' . $us['motDePasse'] . ' id="mdp" name="pwd">';
        echo '  <label for="telephone">Telephone</label>';
        echo '<br>';
        echo '<input type="number" value=' . $us['telephone'] . ' id="telephone" name="telephone">';

        echo '<button type="Submit">Modifier</button>';
        echo '</div>';
        echo '</div>';
        echo "</form>";
      }
    }
  }

  ?>
</body>

</html>