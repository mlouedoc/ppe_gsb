<?php
include '../include/top.php';
   ?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Saisir les information</title>
</head>

<body>
<fieldset>
	<form id="formulaire" action="insertionvisiteur.php" method="get">

		<label for="id">Id du visiteur : </label>
			<input id="id" name="id" type="text" value="" size="6" maxlength="6"/>
		<br>	
		<p></p>
			<label for="nom">Nom du visiteur : </label>
			<input id="nom" name="nom" type="text" value="" size="30" maxlength="30"/>
		<br>
		<p></p>	
			<label for="prenom">Prenom du visiteur  : </label>
			<input id="prenom" name="prenom" type="text" value="" size="30" maxlength="30"/>
		<br>
		<p></p>		
	    	<label for="adresse">Adresse du visiteur : </label>
			<input id="adresse" name="adresse" type="text" value="" size="30" maxlength="30"/>
	    <br>
	    <p></p>
	    	<label for="cp">Code postal : </label>
			<input id="cp" name="cp" type="number" value="" size="5" maxlength="5"/>
	    <br>
	    <p></p>
	    	<label for="ville">Ville : </label>
			<input id="ville" name="ville" type="text" value="" size="20" maxlength="20"/>
	    <br>
	    <p></p>
	    	<label for="pwd">Mot de passe : </label>
			<input id="pwd" name="pwd" type="password" value="" size="30" maxlength="30"/>
	    <br>
	    <p></p>
	    	<label for="login">Login : </label>
			<input id="login" name="login" type="text" value="" size="6" maxlength="6"/>
	    <br>
	    <p></p>
	    <label for="dteEmbauche">Date d'embauche : </label>
			<input id="dteEmbauche" name="dteEmbauche" type="date" value=""/>
	    <br>
	    <p></p>
				<div>
   				 <input type="submit" value="envoyer"/>
 			 </div>	
 				
</fieldset>
	</form>
</body>
</html>
