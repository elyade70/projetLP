<?php
class Bdd
{
    private $bdd;


    function __construct()
    {

        $dsn = 'mysql:dbname=evenementbdd;host=127.0.0.1';
        $dbUser = 'root';
        $dbPwd = '';

        try {
            $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getCategories()
    {
        $sql = "SELECT id_categories,libelle FROM evenementbdd.categories;";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getOneCategorie($idcategorie)
    {
        $sql = "SELECT id_categories,libelle FROM evenementbdd.categories where id_categories=$idcategorie;";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getEvenement()
    {

        $sql = "SELECT `id_evenement`, `libelle`, `detail`, `date`, `heureDebut`, `heureFin`, `lieu`, `age_minimum`, `prix`, `nombrePlaceMaximum`, `fk_categories`
         FROM evenementbdd.evenement;";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getEvenemenentByIdCategorie($idcategorie)
    {
        $sql = "SELECT id_evenement,evenement.libelle,fk_categories,heureDebut,heureFin,detail,lieu,age_minimum,prix,nombrePlaceMaximum FROM evenementbdd.evenement
        Inner join categories on fk_categories=id_categories
        where id_categories=$idcategorie;";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getOneEvenementById($idevenement)
    {

        $sql = "SELECT `id_evenement`, `libelle`, `detail`, `date`, `heureDebut`, `heureFin`, `lieu`, `age_minimum`, `prix`, `nombrePlaceMaximum`, `fk_categories` 
        FROM `evenement` 
        WHERE id_evenement=$idevenement";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getnbPlaceRestante($idevenement)
    {

        $sql = "    SELECT `nombrePlaceMaximum`,fk_utilisateur,sum(quantite),nombrePlaceMaximum-sum(quantite) as nbPlacerestante 
        FROM `evenement` 
        Inner join achete on fk_evenement=id_evenement
        where fk_evenement=$idevenement
         group by fk_evenement;     ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getNombrePlaceAchete($idevenement)
    {

        $sql = "    SELECT sum(quantite) as nbPlaceAchete 
        FROM `achete` 
        where fk_evenement=$idevenement
        GROUP by fk_evenement;
        ;     ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function rechercheDansEvenement($texte)
    {
        $sql = "SELECT `id_evenement`, `libelle`, `detail`, `date`, `heureDebut`, `heureFin`, `lieu`, `age_minimum`, `prix`, `nombrePlaceMaximum`, `fk_categories`
                FROM `evenement` 
                WHERE `libelle` LIKE '%$texte%'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    function rechercheDansCategorie($texte)
    {
        $sql = "SELECT `id_categories`, `libelle` FROM `categories`
                WHERE `libelle` LIKE '%$texte%'";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    function connexion($mail, $pwd)
    {
        $sql = "SELECT `id_utilisateur`, `email`, `nom`, `prenom`,  `motDePasse`
        FROM `utilisateur`
         WHERE email='$mail' AND motDePasse='$pwd';";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function newuser($mail, $pwd, $nom, $prenom, $date_naissance, $telephone)
    {
        $sql = "INSERT INTO `utilisateur` (`email`, `nom`, `prenom`, `date_naissance`, `motDePasse`, `telephone`, `admin`) 
                VALUES (?, ?, ?, ?, ?, ?, 0)";
        $query = $this->bdd->prepare($sql);
        $query->execute([$mail, $nom, $prenom, $date_naissance, $pwd, $telephone]);
        return $query->rowCount();
    }

    function getUser($iduser)
    {
        $sql = "SELECT `id_utilisateur`, `email`, `nom`, `prenom`, `date_naissance`, `motDePasse`, `telephone`, `admin` 
            FROM `utilisateur` 
            WHERE id_utilisateur=$iduser ; ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getAllUser()
    {
        $sql = "SELECT `id_utilisateur`, `email`, `nom`, `prenom`, `date_naissance`, `motDePasse`, `telephone`, `admin` 
            FROM `utilisateur` ; ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getAchatByIdUser($iduser)
    {
        $sql = "SELECT `id_achat`, evenement.libelle, `quantite`, `date_achat`, `fk_utilisateur`, `fk_evenement`,lieu,heureDebut,heureFin,evenement.prix*quantite as prix 
            FROM `achete` 
            INNER JOIN evenement ON evenement.id_evenement = achete.fk_evenement;
            WHERE fk_utilisateur=$iduser ; ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getAllAchatsAndInfo()
    {
        $sql = "SELECT id_achat ,quantite ,date_achat ,id_utilisateur ,email ,nom ,prenom ,libelle 
            FROM `achete` 
            Inner join utilisateur on fk_utilisateur= id_utilisateur 
            inner join evenement on fk_evenement =id_evenement;";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function updateUser($iduser, $mail, $pwd, $nom, $prenom, $date_naissance, $telephone)
    {
        $sql = "UPDATE `utilisateur` SET `email`=?, `nom`=?, `prenom`=?, `date_naissance`=?, `motDePasse`=?, `telephone`=? WHERE `id_utilisateur`=?";
        $query = $this->bdd->prepare($sql);
        $query->execute([$mail, $nom, $prenom, $date_naissance, $pwd, $telephone, $iduser]);
        return $query->rowCount();
    }
    function updateEvent( $ideve,$libelle, $detail, $date, $heuredebut, $heurefin, $lieu, $agemini, $prix, $nombrePlace, $fkcategorie)
    {
        $sql = "UPDATE `evenement` 
            SET `libelle`=?,`detail`=?,`date`=?,`heureDebut`=?,`heureFin`=?,`lieu`=?,`age_minimum`=?,`prix`=?,`nombrePlaceMaximum`=?,`fk_categories`=? 
            where id_evenement=$ideve";
        $query = $this->bdd->prepare($sql);
        $query->execute([$libelle, $detail, $date, $heuredebut, $heurefin, $lieu, $agemini, $prix, $nombrePlace, $fkcategorie]);
        return $query->rowCount();
    }
    function creerAchat($qte, $id_ut, $idevenement)
    {
        $sql = "INSERT INTO `achete`(`quantite`, `date_achat`, `fk_utilisateur`, `fk_evenement`) 
                    VALUES (?, Now(), ?, ?)";
        $query = $this->bdd->prepare($sql);
        $query->execute(array($qte, $id_ut, $idevenement));

        return $query->rowCount();
    }

}
