<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>le 1er code php</title>
</head>
<body>
	<p> ceci est un paragraphe </p>

	<?php
		echo "BONJOUR";

		//Déclaration d'un tableau en PHP
		$user1 = ['Mickael Andrieu', 'email', 'secret', 34];
		echo $user1[0]; //il affichera Mickael Andrieu
		echo $user1[1]; //il affichera email
		echo $user1[3]; //il affichera 34

		//Déclarer une boucle (while)
		// while($valid) {
		// 	//instructions à exécuter dans la boucle
		// }

		//exemple de boucle (while)
		$lines = 1;
		while($lines <=100){
			echo "je ne dois pas regarder les mouches voler quand j'apprends le PHP. </br>";
			$lines++; //incrementation de +1: c'est à dire $lines++ == $lines+1
		}

		//Déclarer une boucle (for)
		for($lines=0; $lines<=2;$lines++){
			echo 'ceci est different de la boucle while.</br>';
		}
	?> 
</body>
</html>