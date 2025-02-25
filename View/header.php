<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../View/index.css">
  <script src="../view/index.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../view/ourholiday.jpg" type="image/jpeg">

  <div class="entete">
    <a href="../Controller/accueil.php"> <img src="../View/logoourholiday.png" id="logo"></a>
    <!-- <input type="text"  id="entreetexte" > <i id="loupe" class="bi bi-search"></i> -->
    <form action="../Controller/header.php" method="POST">
      <input type="text" name="entreetexte" id="entreetexte" placeholder="Rechercher..." onchange="this.form.submit();">
    </form>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
        aria-expanded="false">
        Menu
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="../controller/compte.php"> <i class="bi bi-person-circle"></i> Compte</a>
        </li>
        <li><a class="dropdown-item" href="../controller/accueil.php"><i class="bi bi-house"></i> Accueil</a></li>
        <li><a class="dropdown-item" href="../controller/categories.php"><i class="bi bi-tags"></i> Catégories</a></li>

        <?php
        if (is_array($user) || is_object($user)) {
          foreach ($user as $us) {
            if ($us['admin'] == 1) {
              echo '<li><a class="dropdown-item" href="../controller/admin.php"><i class="bi bi-tools"></i> Tables des admins</a></li>';
            }
          }
        }
        ?>
        </li>

      </ul>
    </div>

  </div>
</head>

<body>


</body>