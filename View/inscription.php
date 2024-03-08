<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

<form action="../Controller/inscription.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  name="email" required placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" required placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">nom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nom" required placeholder="nom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">prénom</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="prenom" required placeholder="prenom">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">N° de téléphone</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="telephone" required placeholder="telephone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date de naissance</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="date_naissance" required placeholder="date">
  </div>

  <button type="submit" class="btn btn-primary">S'incrire</button>
  <a href="../controller/connexion.php">Vous avec déja un compte ?Connectez vous</a>

</form>
</body>
</html>