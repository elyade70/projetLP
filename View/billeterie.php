<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Billeterie</title>
    <link rel="stylesheet" href="../View/billeterie.css">

</head>

<body>
    <div class="all">
        <div class="Information">

            <ul>
                <li><i class="bi bi-calendar3"></i></li>
                <hr>
                <li><i class="bi bi-geo-alt-fill"></i></li>
                <hr>
                <li> <i class="bi bi-currency-euro"></i></li>

            </ul>


        </div>
        <div class="photo">
            <img src="../View/ourholiday.jpg" alt="ourHoliday" id="photoOurholiday">
        </div>
    </div>
    <div class="Achat">
        <p>Préventes: </p>
        <p>30€</p>
        <div class="Prix">
            <i class="bi bi-patch-minus-fill" id="minus"></i>
            <strong id="prix">0</strong>
            <i class="bi bi-patch-plus-fill" id="plus"></i>
        </div>
    </div>
</body>

</html>