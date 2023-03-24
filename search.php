<?php
session_start();
require_once('./composant/header.php');
require_once('./composant/navbar.php');
if (!$_SESSION['email']) {
    return header('Location: http://localhost/login.php?error=Merci de vous connecter');
}

?>

<h1>Connecter : <?= $_SESSION['email']; ?> </h1>


<?php 
require_once('./composant/footer.php');
?>