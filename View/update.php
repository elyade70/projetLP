<?php
require "../View/header.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification</title>
</head>
<body>
<form action="../Controller/update.php" method="POST">
<?php
if(isset($evenements)){


if(is_array($evenements)  || is_object($evenements)) {
    foreach($evenements as $eve) {
echo '<label for="idevenement" style="display:none;">Id:</label>';
echo '<input type="text" id="idevenement" name="idevenement" style="display:none;" value="' . htmlspecialchars($eve["id_evenement"]) . '">';

echo '<label for="libelle">Libellé:</label>';
echo '<input type="text" id="libelle" name="libelle" value="' . htmlspecialchars($eve["libelle"]) . '">';

echo '<label for="date">Date:</label>';
echo '<input type="date" id="date" name="date" value="' . htmlspecialchars($eve["date"]) . '">';

echo '<label for="heureDebut">Heure de début:</label>';
echo '<input type="text" id="heureDebut" name="heureDebut" value="' . htmlspecialchars($eve["heureDebut"]) . '">';

   echo' <br>';
   echo' <br>';
echo '<label for="heureFin">Heure de fin:</label>';
echo '<input type="text" id="heureFin" name="heureFin" value="' . htmlspecialchars($eve["heureFin"]) . '">';

echo '<label for="agemini">Âge minimum:</label>';
echo '<input type="number" id="agemini" name="agemini" value="' . htmlspecialchars($eve["age_minimum"]) . '">';

echo '<label for="lieu">Lieu:</label>';
echo '<input type="text" id="lieu" name="lieu" value="' . htmlspecialchars($eve["lieu"]) . '">';

echo '<label for="prix">Prix:</label>';
echo '<input type="number" id="prix" name="prix" value="' . htmlspecialchars($eve["prix"]) . '">';
echo' <br>';
echo' <br>';    

echo '<label for="nombrePlace">Quantité en stock:</label>';
echo '<input type="number" id="nombrePlace" name="nombrePlace" value="' . htmlspecialchars($eve["nombrePlaceMaximum"]) . '">';

echo '<label for="fkcategorie">Catégorie:</label>';
echo '<input type="number" id="fkcategorie" name="fkcategorie" value="' . htmlspecialchars($eve["fk_categories"]) . '">';

echo '<label for="detail">Détail:</label>';
echo '<textarea id="detail" name="detail">' . htmlspecialchars($eve["detail"]) . '</textarea>';
}
}
}else{
    echo"<script>alert('Modifications enregistrées avec succès');</script>";
    header( "refresh:5;url=../Controller/admin.php" );


}
?>

    <br>
    <br>
    <input type="submit" value="Enregistrer">
</form>

</body>
</html>

       
             
     
             
                   