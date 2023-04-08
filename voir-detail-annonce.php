<?php
require('class/database.php');
require('composant/header.php');

// init object class database
$database = new Database();
// connexion bdd
$pdo = $database->connectDb();
//$result = $database->select($pdo, '*', 'user', ['id_user','1']);

$result = $pdo->prepare('SELECT * FROM ad where id_ad='.$_GET['id_ad'].' ;');
/* requete, */
    $result->execute();
    $utilisateur = $result->fetch();
    //var_dump($utilisateur);
?>
<html>
<head>
<title> détail d'une annonce </title>
</head>
<body>
    <h1 style="text-align:center";>Voir les détails d'une annonce</h1>
    <!-- <div align="center"  style ="border: 4px solid black;
    width:700px;
    border-radius: 40px;">
        <h1  style= "border: 2px solid  blue;
        width:300px;
        border-radius: 70px;" > Profil </h2>
        <br /> <br />
        <h2> Descripition: </h2>
        <br />
        <p>
        Titre: <?php echo $utilisateur['title']; ?>
        <br />
        </p>

        <p>
        Description: <?php echo $utilisateur['description']; ?>
        <br /> 
        </p>

        <p>
        Prix: <?php echo $utilisateur['price']; ?>
        <br /> 
        </p>

        <p>
        Numéro: <?php echo $utilisateur['phone']; ?>
        <br />  
        </p>

        <p>
        Adresse: <?php echo $utilisateur['address']; ?>
        <br />  
        </p>
    </div> -->
    <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Descriptions</th>
      <th scope="col">Prix</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Adresse</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $utilisateur['id_ad']; ?></td>
      <td><?php echo $utilisateur['title']; ?></td>
      <td><?php echo $utilisateur['description']; ?></td>
      <td><?php echo $utilisateur['price']; ?></td>
      <td><?php echo $utilisateur['phone']; ?></td>
      <td><?php echo $utilisateur['address']; ?></td>
    </tr>
  </tbody>
</table>
    
</body>
</html>
