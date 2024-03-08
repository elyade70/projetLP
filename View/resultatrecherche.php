<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>événements</title>
    <link rel="stylesheet" href="../View/evenement.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
  <div class="row">

  <?php
$i=0;
            if (is_array($evenement) || is_object($evenement)) {
                if($nombreResultats>0){
                foreach ($evenement as $eve) {
           
                 

 
                        echo '<div class="card text-center">';
                        echo '  <div class="card-header">';
                        echo '  <h3>  '.$eve['libelle'].' </h3>';
                        echo '  </div>';
                        echo '  <div class="card-body">';
                        echo '    <h5 class="card-title">'. substr($eve['heureDebut'],0,5).'- '. substr($eve['heureFin'],0,5).' </h5>';
                        echo '    <p class="card-text">'. $eve['detail'].'<br> <h3>Lieu: '. $eve['lieu'].'</h3>  </p>';
                        echo '    <a href="../controller/billeterie.php?idevenement='.$eve['id_evenement'].'" class="btn btn-primary">Reserver</a>';
                        echo '  </div>';
                        echo '  <div class="card-footer text-muted">';
                        if($eve['age_minimum']==0){
                            echo '   <strong id="age"> Age minimum: <span style="color:red"> Tout le monde </span> </strong> <br>';
                        }
                        else{
                            echo '   <strong id="age"> Age minimum: '. $eve['age_minimum'].' </strong> <br>';
    
                        }
                        echo '  </div>';
                        echo '  <div class="card-footer text-muted">';
                        if($eve['prix']==0){
                            echo '   <strong id="prix">Prix: <span style="color:red"> GRATUIT </span></strong> <br>'; 
                        }
                        else{
                            echo '   <strong id="prix">Prix: '. $eve['prix'].' €</strong> <br>'; 
                        }
                       
                        echo '  </div>';
                        echo '  <div class="card-footer text-muted">';
                        if($eve['nombrePlaceMaximum']==0){
                            echo '   <strong id="nbplace">Nombre de places maximum:  <span style="color:red"> Illimité </span> </strong>'; 
    
                        }
                        else{
                            echo '   <strong id="nbplace">Nombre de places maximum: '. $eve['nombrePlaceMaximum'].' </strong>'; 
    
                        }
                        echo '  </div>';
                        echo '</div>';
                        
                    


                    }
 
                
                    
       
          
                }else {
            $seconde=5;
                    echo '<div class="alert alert-dark" role="alert">';
                    echo 'Aucun résultat trouvé. Vous serez redirigés dans '.$seconde.' secondes';
                    echo '</div>';

                    header( "refresh:5;url=../Controller/accueil.php" );
                }
            }

            ?>

        </div>
        </div>
       
        </body>