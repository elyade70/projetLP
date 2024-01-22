<?php

require "../View/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../View/evenement.css">
    <title>événements</title>

</head>

<body>
    <div class="page">
        <div class="categories">
            <?php
            if (is_array($categories) || is_object($categories)) {
                foreach ($categories as $cat) {
                    echo "<div id='categories" . $cat['id_categories'] . "'>" . $cat['libelle'] . " </div>";
                }
            }

            ?>

        </div>
        <div class="animations">
            <?php
            if (is_array($oneCategorie) || is_object($oneCategorie)) {
                foreach ($oneCategorie as $oneCat) {
                    echo "<div id='categorie" . $oneCat['id_evenement'] . "'>" . $oneCat['libelle'] . " </div>";
                }
            }

            ?>
        </div>
    </div>
    <script>

function mouse(){
  
<?php
echo"ekip";
?>

}
mouse();
    </script>
</body>

</html>