<?php

if(isset($_POST['submit']))
{
	$civilite=htmlentities(trim($_POST['civilite']));
	$nom=htmlentities(trim($_POST['nom']));
	$prenom=htmlentities(trim($_POST['prenom']));
	$telephone=htmlentities(trim($_POST['telephone']));
	$mail=htmlentities(trim($_POST['mail']));

	if($nom&&$prenom&&$telephone&&$mail)
	{
//On se connecte à la base de données
		$bdd = new PDO('mysql:host=localhost;dbname=institut;charset=utf8', 'root', '');
		
//On fait une requête qui permet d'insérer les données du formulaire dans la base de données
		$requete = $bdd->prepare('INSERT INTO client(civilite, nom, prenom,telephone, mail) VALUES(:civilite,:nom,:prenom,:telephone, :mail)');
		$requete->bindValue(':civilite', $civilite, PDO::PARAM_STR); 		
		$requete->bindValue(':nom', $nom, PDO::PARAM_STR); 
		$requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
		$requete->bindValue(':telephone', $telephone, PDO::PARAM_STR);
		$requete->bindValue(':mail', $mail, PDO::PARAM_STR);
		

//On exécute la requête
		$requete->execute();
	
		die("Inscription terminée, je vous invite à passer à la seconde étape ! <a href='formulairerdv.php'>Prenez rendez-vous !</a>");
	
		}else echo "Erreur : veuillez saisir tous les champs";

}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" action="formulairerdv.php"> 
		<title> Mon formulaire client</title>
	</head>
  	 <body>
	 
	 <h1>Votre fichier client...</h1>
		<form method="POST" action="formulaireclient.php" >
		<table>
		
		<tr>
			<td>Civilité</td>
			<td><input type="radio" name="civilite" value="M." />M.
				<input type="radio" name="civilite" value="Mlle" />Mlle
				<input type="radio" name="civilite" value="Mme" />Mme</td>
		</tr>
		<tr>
			<td>Votre nom</td>
			<td><input type="text" name="nom"></td>
		</tr>
		<tr>
			<td>Votre prénom</td>
			<td><input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td>Votre numéro de téléphone</td>
			<td><input type="text" name="telephone"></td>
		</tr>
		<tr>
			<td>Votre adresse mail</td>
			<td><input type="email" name="mail"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Création de votre fichier" name="submit"/></td>
		</tr>
		</table>
		</form>
		

		
	</body>
</html>