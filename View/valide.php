<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Redirection</title>
</head>
<body>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Inscription validée!</h4>
  <p>Vos informations ont bien été pris en compte .</p>
  <hr>
  <p class="mb-0">Vous serez redirigés vers la page de connexion dans quelques secondes...</p>
</div>
<?php
                    header( "refresh:5;url=../Controller/connexion.php" );

?>
</body>
</html>