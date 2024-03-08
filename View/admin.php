<?php

require "../View/header.php";
?>


<?php
if (is_array($user) || is_object($user)) {
    foreach ($user as $us) {
        if ($us['admin'] != 1) {
            echo '
    <!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 404 Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="d-flex align-items-center justify-content-center vh-100 bg-primary">
        <h1 class="display-1 fw-bold text-white">404</h1>
    </div>
  </body>

</html>';
        } else {
            ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>

            <body>


                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="../controller/admin.php?user=true"><strong>Utilisateurs</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../controller/admin.php?achats=true"><strong>Achats</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../controller/admin.php?cat=true"><strong>Catégories</strong></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../controller/admin.php?eve=true"><strong>Evenements</strong></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <table id="tb" align="center" border="2" height="150">

                    <?php

if(isset($achats)){

                    if (is_array($achats) || is_object($achats)) {
                        echo "<th>id achat</th>";
                        echo "<th>quantite</th>";
                        echo "<th>date d'achat</th>";
                        echo "<th>email</th>";
                        echo "<th>nom</th>";
                        echo "<th>prenom</th>";
                        echo "<th>libelle</th>";
                        foreach ($achats as $acs) {

                            echo "<tr height='40'>";
                            echo "<td>" . $acs['id_achat'] . "</td> ";
                            echo "<td>" . $acs['quantite'] . "</td> ";
                            echo "<td>" . $acs['date_achat'] . "</td> ";
                            echo "<td>" . $acs['email'] . "</td> ";
                            echo "<td>" . $acs['nom'] . "</td> ";
                            echo "<td>" . $acs['prenom'] . "</td> ";
                            echo "<td>" . $acs['libelle'] . "</td> ";

                        }
                    }
    
                }
                if(isset($users) ){
              
                    if (is_array($users) || is_object($users)) {


                        echo "<th>id user</th>";
                        echo "<th>email</th>";
                        echo "<th>nom</th>";
                        echo "<th>prenom</th>";
                        echo "<th>date de naissance</th>";
                        echo "<th>mot de passe </th>";
                        echo "<th>telephone</th>";
                        echo "<th>admin</th>";
                        foreach ($users as $uss) {

                            echo "<tr height='40'>";
                            echo "<td>" . $uss['id_utilisateur'] . "</td> ";
                            echo "<td>" . $uss['email'] . "</td> ";
                            echo "<td>" . $uss['nom'] . "</td> ";
                            echo "<td>" . $uss['prenom'] . "</td> ";
                            echo "<td>" . $uss['date_naissance'] . "</td> ";
                            echo "<td>" . $uss['motDePasse'] . "</td> ";
                            echo "<td>" . $uss['telephone'] . "</td> ";
                            echo "<td>" . $uss['admin'] . "</td> ";

                        }
                    }
      
                }
                if(isset($categories)){

                
                    if (is_array($categories) || is_object($categories)) {
                        echo "<th>id categorie</th>";
                        echo "<th>libelle</th>";
                        foreach ($categories as $cats) {

                            echo "<tr height='40'>";
                            echo "<td>" . $cats['id_categories'] . "</td> ";
                            echo "<td>" . $cats['libelle'] . "</td> ";

                        }
                    }
                }
                if(isset($evenements)){

                
                    if (is_array($evenements) || is_object($evenements)) {

                        echo "<th>id evenement</th>";
                        echo "<th>libelle</th>";
                        echo "<th>detail</th>";
                        echo "<th>date</th>";
                        echo "<th>heureDebut</th>";
                        echo "<th>heureFin</th>";
                        echo "<th>lieu</th>";
                        echo "<th>age_minimum</th>";
                        echo "<th>prix</th>";
                        echo "<th>nombrePlaceMaximum</th>";
                        echo "<th>fk categories</th>";
                        echo "<th>options</th>";
                        foreach ($evenements as $eve) {

                            echo "<tr height='40'>";
                            echo "<td>" . $eve['id_evenement'] . "</td> ";
                            echo "<td>" . $eve['libelle'] . "</td> ";
                            echo "<td>" . $eve['detail'] . "</td> ";
                            echo "<td>" . $eve['date'] . "</td> ";
                            echo "<td>" . $eve['heureDebut'] . "</td> ";
                            echo "<td>" . $eve['heureFin'] . "</td> ";
                            echo "<td>" . $eve['lieu'] . "</td> ";
                            echo "<td>" . $eve['age_minimum'] . "</td> ";
                            echo "<td>" . $eve['prix'] . "</td> ";
                            echo "<td>" . $eve['nombrePlaceMaximum'] . "</td> ";
                            echo "<td>" . $eve['fk_categories'] . "</td> ";
                            echo "<td><button><a href='../controller/update.php?eveid=".$eve['id_evenement']."'> Modifier</a></button> </td> ";

                        }
                    }
                }
                    ?>
                </table>
            </body>

            </html>
            <?php
        }
    }
}