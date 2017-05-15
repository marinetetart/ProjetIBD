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
		 <center><h1>Choisissez votre rendez-vous dans notre institut Spa des îles. </h1></center>
		<center><h3>Etape 2 sur 3</h3></center> </br>


<h2>Quel soin souhaitez-vous ?</h2>

 <form method="POST" action="suppresion.php" >
<SELECT name="NomSoin" > 
<option>Choisissez</option>

<?php 

//////////////////////////////////////////////////////////////////////
//																	//
//			Menu déroulant des soins à partir de la BDD			    //
//																	//
//////////////////////////////////////////////////////////////////////


// lancement de la requête pour afficher les soins
   foreach ($bdd->query("SELECT NomSoin FROM soins ") as $res){
		echo '<option value="'.$res[NomSoin].'">'.$res[NomSoin].'</option>';
	}
?>
		</select>
		<input  type="submit" name="soins" value="Validez"/>
		</form>
<br/>



</body>

</html>