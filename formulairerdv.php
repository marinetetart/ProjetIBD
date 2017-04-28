<html>
	<head>
		<meta charset="utf-8"> 
		<title> Ma prise de rendez-vous</title>
	</head>
  	 <body>
	 
	 <h1>Votre rendez-vous</h1>
		<form method="get" >
		<table>
		<tr>
			<td>Votre nom</td>
			<td><input name="nom"></td>
		</tr>
			<tr>
			<td>Votre prénom</td>
			<td><input name="prénom"></td>
		</tr>
			<tr>
			<td>Votre adresse mail</td>
			<td><input name="mail"></td>
		</tr>
		<tr>
			<td>Mon soin</td>
			<td><input name="soin"></td>
		</tr>
			
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Création de votre fichier"/></td>
		</tr>
		</table>
		
		<h1> Quelle esthéticienne voulez-vous ?</h1>

<select name="estheticienne">
<option value="" selected></option>
<?php
$db=mysql_connect('localhost', 'root', '');
mysql_select_db('estheticienne.csv',$db);


?>
</select>

		</form>
	</body>
</html>
