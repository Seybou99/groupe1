
<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body> -->
    <?php
     require_once('./composant/header.php');
      // session_start();
  $a = '<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="imgaes/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
        $nav = isset($_SESSION['email']) ? '<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="color:#2A4984" href="mes-annonces.php">Annonces</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#2A4984" href="mes-favoris.php">Favoris</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#2A4984" href="voir-detail-annonce.php">Profil</a>
          </li>
        </ul>' : '<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>';
    $button = isset($_SESSION['email']) ? '<a class="btn btn-outline-danger" href="../back-end/deconnexion.php">Deconnexion</a>' : '
      <a class="btn btn-outline-success m-1" href="/inscription.php">Inscription</a>
      <a class="btn btn-success m-1" href="/login.php">Connexion</a>
    ';
    $b = '</div>
    </div>
  </nav>';

  echo $a.$nav.$button.$b;?>
  <!-- </body>
</html> -->