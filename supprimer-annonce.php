<?php
require('class/database.php');
require('composant/header.php');

// init object class database
$database = new Database();
// connexion bdd
$pdo = $database->connectDb();
//$result = $database->select($pdo, '*', 'user', ['id_user','1']);

$result = $pdo->prepare('DELETE FROM ad where id_ad='.$_GET['id_ad'].' ;');
/* requete, */
    $result->execute();
    //$utilisateur = $result->fetch();
   // var_dump($utilisateur);
?>
<html>
<head>
<title>supprimer</title>
</head>
    <?php
    header('location: mes-annonces.php')
    ?>
</body>
</html>
