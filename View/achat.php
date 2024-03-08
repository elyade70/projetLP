<?php

require "../View/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achat</title>
    <link rel="stylesheet" href="../View/achat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
    <h1>Récapitualif</h1>
    <?php
if (is_array($evenement) || is_object($evenement)) {
    foreach ($evenement as $eve) {
echo "<div><strong>Evenement: </strong> ".$eve['libelle']." </div>";
echo "<div><strong>Lieu: </strong> ".$eve['lieu']." </div>";
echo "<div><strong>Date: </strong>  " . date('d F Y', strtotime($eve['date'])) ." </div>";
echo "<div><strong>Quantité: </strong> ".$qte." </div>";
echo "<div><strong>Prix: </strong> ".$prix." </div>";
    }}
    ?>
    <div class="alert alert-success" role="alert">
  Validé 
</div>
    </div>
</body>
</html>