<html>
	<head>
		<meta charset="utf-8"> 
		<title> Ma prise de rendez-vous</title>
	</head>
  	 <body>
	
		<h1> Quelle esthéticienne voulez-vous ?</h1>

<!--<form method="GET" action="rdv.php">	
<select name="prenom">
<option value="" selected></option>
</select>

		</form>-->
<?php
//connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=institut;charset=utf8', 'root', '');


$reponse=$bdd->query('SELECT * FROM esthéticiennes');
echo'<select name="prenom">';
while ($donnees = mysql_fetch_array($reponse) )

{

?>

 
<option value="<?php echo $donnees['prenom']; ?>">

 
<?php

} 

 
echo'</select>';
?>

 


	</body>
</html>
