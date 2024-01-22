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
        $query =  $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getOneCategorie()
    {

        $sql = "SELECT id_evenement,libelle FROM evenementbdd.evenement;";
        $query =  $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getOneCategorieByID($idcategorie)
    {
        $sql = "SELECT evenement.libelle FROM evenementbdd.categories
        Inner join evenement on fk_categories=id_categories
        where id_categories=$idcategorie;";
        $query =  $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
