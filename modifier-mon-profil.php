<?php
session_start();
$_SESSION["user_id"] = 1;
//Vérifier si l'utilisateur est connecté
if($_SESSION['email']) {
   // Utiliser la variable $_SESSION["user_id"] pour récupérer les informations de l'utilisateur à partir de la base de données
} else {
   // Rediriger l'utilisateur vers la page de connexion
   header("Location: login.php");
   exit();
}
?>

<?php

require('class/database.php');

// init object class database
$database = new Database();
// connexion bdd
$pdo = $database->connectDb();

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST["firstname"];
    $prenom = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Requête SQL pour mettre à jour les informations de l'utilisateur
    $sql = "UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, phone = :phone WHERE email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":firstname", $nom);
    $stmt->bindValue(":lastname", $prenom);
    $stmt->bindValue(":email", $email);
    $stmt->bindValue(":phone", $phone);
    $stmt->bindValue(":email", $_SESSION["email"]);
    $stmt->execute();

    // Redirection vers la page du profil
    header("Location: mon-profil.php");
    exit();
}

//Récupération des informations de l'utilisateur
$sql = "SELECT * FROM user WHERE id_user = :id_user";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":email", $_SESSION["email"]);
//$stmt->execute();
$user = $stmt->fetch();

// Formulaire d'édition du profil
?>
<form method="post">
    <label for="firstname">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?php echo htmlspecialchars($user["firstname"]); ?>"><br>

    <label for="lastname">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo htmlspecialchars($user["lastname"]); ?>"><br>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user["email"]); ?>"><br>

    <label for="phone">Phone :</label>
    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($user["phone"]); ?>"><br>

    <input type="submit" value="Enregistrer">
</form>

<?php
// Fermeture de la connexion à la base de données
$pdo = null;
?>