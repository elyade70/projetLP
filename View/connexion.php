<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <title>Connexion</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 login-container">
        <form class="form-signin" action="" method="POST">
          <h2 class="text-center">Connexion</h2>
          <input type="email" id="inputEmail" class="form-control" placeholder="email" name="email" required autofocus>
          <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" id="pwd" name="pwd"
            required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Valider</button>
          <br>
          <a href="../controller/inscription.php" class="btn btn-xs btn-info btn-block">Vous n'avez pas de compte
            ?S'inscrire</a>
        </form>
      </div>
    </div>
  </div>
  <style>
    input {
      width: 300px !important;
    }

    /* Personnalisation du style */
    .navbar-nav {
      margin-left: auto;
    }

    .center-content {
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
    }

    .photo-container {
      max-width: 70%;
      /* Changer la taille selon les besoins */
      display: flex;
      justify-content: center;
    }

    .photo-container img {
      max-width: 100%;
    }

    .Lorem {
      margin-top: 20px;
      /* Espace entre l'image et le texte */
    }

    @media (min-width: 768px) {
      .photo-container {
        justify-content: flex-start;
      }

      .Lorem {
        margin-top: 0;
        /* Réinitialiser la marge en haut */
        margin-left: 20px;
        /* Espace entre l'image et le texte */
      }
    }

    body {
      background-color: #f8f9fa;
    }

    .login-container {
      margin-top: 100px;
    }

    .form-signin {
      max-width: 380px;
      padding: 15px;
      margin: auto;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin input[type="text"],
    .form-signin input[type="password"] {
      margin-bottom: 10px;
    }

    .form-signin button[type="submit"] {
      margin-top: 15px;
    }
  </style>
</body>

</html>