<!--On met en relation la page avec la base de données -->
<?php include('Connexion.php') ?>

<html>

	<head>

		<meta charset="utf-8"> 
	
		<body bgcolor="#B0C4DE">

<title> Ma prise de rendez-vous</title>

	</head>

  	 <body>

  	 	 <center><img src="bannierespa.png" ></center>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "institut";
// Create connection
$bdd = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($bdd->connect_error) {
    die("Connection failed: " . $bdd->connect_error);
}


//////////////////////////////////////////////////////////////////////
//																	//
//			Supression d'un soin figurant en double                 //
//                      dans la base                                //
//																	//
//////////////////////////////////////////////////////////////////////


$NomSoin=$_POST['NomSoin'];
// lancement de la requête pour effacer le soin
$sql ="DELETE FROM soins WHERE NomSoin=$NomSoin";
//mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());
if ($bdd->query($sql) === TRUE) {
    echo "La suppression du soin a été effectuée correctement"."<br />";
} else {
    echo "Error: " . $sql . "<br>" . $bdd->error;
}


?>

<center> <h2> <a href="dispos.php">Cliquez ici maintenant pour nous indiquer vos disponibilités !</a></h2> </center>

</body>

</html>