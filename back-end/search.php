<?php
// importation de la class bdd
require('./class/database.php');
$database = new Database();
// SELECT * FROM ad LEFT JOIN villes_france on ad.id_ville_france = villes_france.ville_id WHERE ville_slug LIKE "coulo%"
$pdo = $database->connectDb();
 
$result = $database->selectLeftJoinWhereLike($pdo, '*', 'ad','villes_france', 'ad.id_ville_france = villes_france.ville_id', ['ville_slug', $_GET['text'].'%']); 
$result = $result->fetchAll(PDO:: FETCH_ASSOC);
// var_dump($result);
?>