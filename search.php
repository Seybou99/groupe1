<?php
session_start();
require_once('./composant/header.php');
require_once('./class/form.php');
require_once('./composant/navbar.php');

if (!$_SESSION['email']) {
    return header('Location: http://localhost/login.php?error=Merci de vous connecter');
}
$form = new Form();

if (isset($_GET['text'])){
    require_once('./back-end/search.php');
}
?>
<!-- <h1>Connecter : <?= $_SESSION['email']; ?> </h1> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="main mt-0">
    <div class="container">
    <form action="/search" method="get">
    <div class="row">
        <div class="card mt-5 p-3">
        <div class="col-md-8">
        <?= $form->Input("12", "text", "votre ville", "text", "Entrer une ville", ''); ?>
        </div>
        <div class="col-md-4">
        <?= $form->Input("12 mt-3 pt-3", "submit", "votre recherche", "submit", "", 'rechercher'); ?>
        </div>
        </div>
    </div>
    </form>
    <?php echo isset ($_GET['text']) ? '<div class="card mt-5"><div class="card-header"> Votre résultat :'.$_GET['text'] .'</div> </div> ' : '';  ?>
        

        <?php
         if (isset($_GET['text'])){
            echo '<div class="card-body">
                    <div class="row">';
            foreach ($result as $key => $value){
                echo'<div class="col-md-4">
                   <div class="card">'
                   .'<h1 class="m-2">'.$value['title'].'</h1>'
                   .'<h5 class="m-2">'.$value['description'].'</h5>'.
                   '<p class="text-danger m-5">'.
                     $value['price'].'€
                    </p>'.
                    '<p class="text-success outline-success m-5">'.
                     $value['ville_slug'].'</p>'.
                '</div>
             </div>';
            }
             
         echo '</div>
            </div>';
         }
        ?>
  
    </div>
    
</div>
    </div>
<?php 
require_once('./composant/footer.php');
?>
  </body>