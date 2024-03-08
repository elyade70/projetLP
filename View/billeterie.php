<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Billeterie</title>
    <link rel="stylesheet" href="../View/billeterie.css">
    <script src="../View/billeterie.js"></script>

</head>

<body>
    <div class="all">
        <div class="Information">

            <?php

            if (is_array($evenement) || is_object($evenement)) {
                foreach ($evenement as $eve) {
                    echo "   <ul>";
                    echo '    <li><i class="bi bi-asterisk"><strong> ' . $eve['libelle'] . '</strong></i></li>';
                    echo '       <hr>';
                    echo '   <li><i class="bi bi-calendar3"><strong> ' . date('d F Y', strtotime($eve['date'])) . '</strong></i></li>';
                    echo '    <hr>';
                    echo '    <li><i class="bi bi-geo-alt-fill"><strong> ' . $eve['lieu'] . '</strong></i></li>';
                    echo '    <hr>';
                    echo '   <li> <i class="bi bi-currency-euro"><strong> ' . $eve['prix'] . '</strong></i></li>';


                    if (is_array($nbPlaceRestante) || is_object($nbPlaceRestante)) {
                        foreach ($nbPlaceRestante as $nbplace) {
                            if ($nbplace['nbPlacerestante'] == null) {
                                echo '    <hr>';
                                echo '   <li><i class="bi bi-ticket-perforated"></i><strong> Il reste ' . $eve['nombrePlaceMaximum'] . ' place(s)</strong></i></li>';

                            } else {
                                echo '    <hr>';
                                echo '   <li><i class="bi bi-ticket-perforated"></i><strong> Il reste ' . $nbplace['nbPlacerestante'] . ' place(s)</strong></i></li>';

                            }
                        }
                    }
                    echo '    </ul>';
                }
            }

            ?>
        </div>
        <div class="photo">
            <?php
            if (is_array($evenement) || is_object($evenement)) {
                foreach ($evenement as $eve) {
                    echo "<div id='detail'>" . $eve['detail'] . "</div> ";
                    //<img src="../View/ourholiday.jpg" alt="ourHoliday" id="photoOurholiday">
                }
            }
            ?>
        </div>
    </div>
    <form action="../Controller/achat.php" method="GET">
        <div class="Achat">

            <?php
            if (is_array($evenement) || is_object($evenement)) {
                foreach ($evenement as $eve) {
                    if (is_array($nbPlaceRestante) || is_object($nbPlaceRestante)) {
                        foreach ($nbPlaceRestante as $nbplres) {
                            if (is_array($nbPlaceAchetes) || is_object($nbPlaceAchetes)) {
                                foreach ($nbPlaceAchetes as $nbach) {
                                    if ((($eve['nombrePlaceMaximum'] - $nbplres['nbPlacerestante'])) > 0) {



                                        echo "<p id='prix' name='prix'>" . $eve['prix'] . " €</p>";
                                        echo "<p id='prix2' style='display:none'>" . $eve['prix'] . "</p>";
                                        echo "<p id='id' style='display:none'>" . $eve['id_evenement'] . "</p>";


                                        echo '  <div class="Prix">';

                                        echo '   <!-- <i class="bi bi-patch-minus-fill" id="minus" onclick="minus();"></i> -->';
                                        echo '    <label for="qte">Quantité:</label>';
                                        echo '   <select name="qte" id="qte" style="width:90px" onchange="setPrix(this.value);">';





                                        for ($i = 1; $i <= 5; $i++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        }


                                        echo '</select>';

                                        echo '   </div>';

                                        echo ' <input type="button" value="Acheter" id="achete" onclick="acheter();"> ';
                                    } else {

                                        echo '<div class="alert alert-dark" role="alert" style="width: 350px !important;">
                                                Toutes les places sont prises
                                                </div>   ';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </form>
    <script>
        function setPrix(value) {
            // Assurez-vous que prix2 est correctement défini avant d'utiliser la fonction
            var prix2 = parseFloat(document.getElementById("prix2").innerHTML);
            var prixTotal = prix2 * value;
            document.getElementById("prix").innerHTML = prixTotal.toFixed(2) + "€"; // Arrondir à deux décimales
        }
        function acheter() {
            var prixttc = parseInt(document.getElementById("prix").innerHTML);
            var qte = parseInt(document.getElementById("qte").value);
            var id = parseInt(document.getElementById("id").innerHTML);
            window.location.href = "../controller/achat.php?id=" + id + "&prix=" + prixttc + "&qte=" + qte;

        }

    </script>
</body>

</html>