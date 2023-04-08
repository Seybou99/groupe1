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
    <a href="mes-annonces.php" style="font-size:20px;text-decoration:none;color:red;";>
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>Retour
   </a>
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
