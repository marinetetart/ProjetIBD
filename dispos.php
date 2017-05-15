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
		<center><h3>Etape 3 sur 3</h3></center> </br>

		 
		 
<h2>Veuillez indiquez vos disponibilités </h2> 
 
 <form method="POST" action="confirmationrdv.php" >
<textarea name="Date" rows="5" cols="50"></textarea></br>
<input  type="submit" name="rdv" value="Prendre mon rendez-vous"/>
</form>


		 
		 
</body>

</html>