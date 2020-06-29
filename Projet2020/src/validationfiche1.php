<?php
include '../include/top.php';
include '/AccesDonnee/connectAD.php';
   ?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Saisir les information</title>
</head>

<body>

	<form id="formulaire" action="validationfrais.php" method="get">

		<fieldset>
		    <legend>INFORMATION : </legend>
			<label for="idVisiteur" >Choisir le visiteur : </label>
			<select size="1" id="idVisiteur" name="idVisiteur" >
				<?php
                $sql = "SELECT DISTINCT idVisiteur, nom from visiteur, fichefrais where visiteur.id= fichefrais.idVisiteur ";
                $results = tableSQL($sql);

                foreach ($results as $row) {
                //$id = $row['id'];	
                $idVisiteur = $row['idVisiteur'];
                $nom = $row['nom'];
                ?>  
    			<option value="<?php echo $idVisiteur?>"><?php echo $nom?></option>	
				<?php
                }
                ?>
			</select>
			
			
			<br>	
		<p></p>
			<label for="mois">Numero du mois : </label>
			<input id="mois" name="mois" type="text" value="" size="10" maxlength="8"/>
		<br>
		<p></p>	
			<label for="annee">Annee (4 chiffres) : </label>
			<input id="annee" name="annee" type="text" value="" size="10" maxlength="8"/>
		<br>
		<p></p>
		<div>
   				 <input type="submit" value="afficher la fiche de frais"/>
 			 </div>
		</fieldset>
		</form>