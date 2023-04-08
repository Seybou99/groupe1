<?php 
    require('./class/form.php');
    $form = new Form();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>   
    <div class="main">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="imgaes/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mon profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Mes favori </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mes annonces</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"href="../back-end/deconnexion.php"><i class="fa fa-user-o" style="color:rgb(243, 240, 240)"></i></a>
              </li> -->
            </ul><ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <a href="/login.php"><i class="fa fa-user" style="font-size:35px;color:white"></i></a>
          <!-- <a class="btn btn-outline-success m-1" href="/inscription.php">Inscription</a>
          <a class="btn btn-success m-1" href="/login.php">Connexion</a> -->
       </div>
        </div>
      </nav>
      <!-- background image -->
        <div class="main-text">
            <h2>Superbes chambres </h2>
        <h1>sur <span>Dormir Co.</span></h1>
        </div>
    <!-- background image ended -->
</div>
<div class="award-winning-hotel">
    <h1>Nos <span>différents</span> Chambres</h1>
    <div class="main-hotel">
        <div class="inner-award">
            <img src="imgaes/award1.png" alt="">
            <h2>Nice</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
        </div>
        <div class="inner-award">
            <img src="imgaes/award 2.png" alt="">
            <h2>Monaco</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
    
        </div>
        <div class="inner-award">
            <img src="imgaes/award 3.png" alt="">
            <h2>Canne</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
    
        </div>
        <div class="inner-award">
            <img src="imgaes/award4.png" alt="">
            <h2>Lille</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
    
        </div>
        <div class="inner-award">
            <img src="imgaes/award5.png" alt="">
            <h2>Bordeaux</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
        </div>
        <div class="inner-award">
            <img src="imgaes/award6.png" alt="">
            <h2>Paris</h2>
            <p>Chaque réservation comprend une protection gratuite en cas d'annulation par l'hôte, d'inexactitudes dans la description du logement, ainsi que d'autres problèmes comme les difficultés d'accès au logement.</p>
    
        </div>
    </div>
    
</div>
<!-- roomes -->
<div class="our-rooms">
    <h1>Nos <span>Chrambres</span></h1>
    <div class="inner-rooms">
        <div class="room-box">
            <img src="imgaes/award1.png" alt="">
        </div>

        <div class="room-box">
         <img src="imgaes/award1.png" alt="">
         <!-- <div class="beds">
             <span>1 bed</span><i class="fas fa-bed"></i>
         </div> -->
     </div>

     <div class="room-box">
         <img src="imgaes/award1.png" alt="">
         <!-- <div class="beds">
             <span>1 bed</span><i class="fas fa-bed"></i>
         </div> -->
     </div>
    </div>
</div>
<div class="second-background">
    <div class="second-text">
        <h1>En</h1>
        <h2>Hiver</h2>
    </div>
</div>

<!-- our gallery -->

<div class="gallery">
    <h1>Notre <span>Galerie</span></h1>
    <div class="main-gallery">
        <div class="inner-gallery">
                <img src="imgaes/award1.png" alt="">
            
        </div>
        <div class="inner-gallery">
            <img src="imgaes/award1.png" alt="">
           
        </div>
        <div class="inner-gallery">
            <img src="imgaes/award1.png" alt="">
        </div>
        <div class="inner-gallery">
            <img src="imgaes/award1.png" alt="">
        </div>
        <div class="inner-gallery">
            <img src="imgaes/award1.png" alt="">
        </div>
        <div class="inner-gallery">
            <img src="imgaes/award1.png" alt="">
        </div>
    </div>
<?php require('./composant/footer.php');?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</html>