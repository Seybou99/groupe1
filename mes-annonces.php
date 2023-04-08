<?php
require('class/database.php');
require('composant/header.php');

// init object class database
$database = new Database();
// connexion bdd
$pdo = $database->connectDb();
//$result = $database->select($pdo, '*', 'user', ['id_user','1']);

$result = $pdo->prepare('SELECT * FROM ad');
/* requete, */
    $result->execute();
    //$utilisateur = $result->fetch();
   // var_dump($utilisateur);
?>
<html>
<head>
<title> Annonce</title>
</head>
<body>
<h1 style="text-align:center";>Voir les annonces</h1>
<a href="search.php" style="font-size:20px;text-decoration:none;color:red;";><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Retour</a>
    <table class="table table-bordered border-primary ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
          foreach ($result as $key => $value) {
            $id_ad=$value["id_ad"];
            $title=$value['title'];
          echo " <tr><td>".$id_ad."</td>";
          echo '<td>'.$title.'</td>';
           echo' <td>
              <a href="voir-detail-annonce.php?id_ad='.$value['id_ad'].'" class="btn btn-success">Détail</a>
              <a href="" class="btn btn-warning">Modifier</a>
              <a href="supprimer-annonce?id_ad='.$value['id_ad'].'" class="btn btn-danger">Supprimer</a>
            </td>
          </tr>';
        }
    ?>
    
  </tbody>
</table>
    
</body>
</html>
