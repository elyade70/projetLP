<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../View/categories.css">
    <title>Catégories</title>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
  <div class="row">

  <?php
$i=0;
            if (is_array($categories) || is_object($categories)) {
                foreach ($categories as $cat) {
              
             $i++;
          //    if ($i % 4 == 0) {
          //     echo '<div class="row">';
          // }
            echo' <div class="card" style="width: 18rem;">';
            echo' <img class="card-img-top" src="../View/'.$i.'.jpg" alt="Card image cap">';
            echo' <div class="card-body">';
              echo' <h3 class="card-title">' . $cat['libelle'] . ' </h3>';
            echo' </div>';   
            echo' <div class="card-body">';
      
              echo'  <button id="bouton" ><a href="../Controller/evenement.php?idcategorie='.$cat["id_categories"].'"  class="card-link">Voir les événements </a></button>';
            echo' </div>';
          echo' </div>';
          // if($i % 4 == 0){
          //   echo' </div>';
          // }
         
    
       
          
                }
            }

            ?>
 
</div>
</div>

</body>

</html>