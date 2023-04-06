<?php
require('class/database.php');

// init object class database
$database = new Database();
// connexion bdd
$pdo = $database->connectDb();
//$result = $database->select($pdo, '*', 'user', ['id_user','1']);

$result = $pdo->prepare('SELECT * FROM user WHERE id_user');
/* requete, */
    $result->execute();
    $utilisateur = $result->fetch();
    //var_dump($utilisateur);
?>
<html>
<head>
<title> Profil </title>
</head>
<body>
    <div align="center"  style ="border: 4px solid black;
    width:700px;
    border-radius: 40px;">
        <h1  style= "border: 2px solid  blue;
        width:300px;
        border-radius: 70px;" > Profil </h2>
        <br /> <br />
        <h2> Descripition: </h2>
        <br />
        <p>
        Prenom: <?php echo $utilisateur['lastname']; ?>
        <br />
        </p>

        <p>
        Nom: <?php echo $utilisateur['firstname']; ?>
        <br /> 
        </p>

        <p>
        Email: <?php echo $utilisateur['email']; ?>
        <br /> 
        </p>

        <p>
        Numéro: <?php echo $utilisateur['phone']; ?>
        <br />  
        </p>

        <p>
        date_création: <?php echo $utilisateur['date_created']; ?>
        <br />  
        </p>

        <p>
        date_mise_à_Jour: <?php echo $utilisateur['date_updated']; ?>
        <br /> 
        </p>

        
        <?php
        // if(isset($_SESSION['id_user']) AND $utilisateur['id_user'] == $_SESSION['id_user'])
        //     { ?>
            <!-- <a href='modifier_profil.php'> Modifier mon profil </a> -->
       <!-- <a href='deconnexion.php'> Se déconnecter </a> -->
           <?php
        //     } ?>

    </div>
</body>
</html>

<?php
//{header("Location:ConnexionDepart.php?erreur=intru"); // redirection en cas d'echec
//} ?>