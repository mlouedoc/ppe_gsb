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

	<form id="formulaire" action="insertionfiche.php" method="get">

		<fieldset>
		    <legend>INFORMATION : </legend>
			<label for="idVisiteur" >Id du visiteur : </label>
			<select size="1" id="idVisiteur" name="idVisiteur" >
				<?php
                $sql = "SELECT * from visiteur";
                $results = tableSQL($sql);

                foreach ($results as $row) {
                    //$id = $row['id'];
                    $idVisiteur = $row['id'];
                    $nom = $row['nom'];
                    ?>
    			<option value="<?php echo $idVisiteur?>"><?php echo $nom?></option>	
				<?php
                }
                ?>
			</select>
			
		<br>	
		<p></p>
			<label for="mois">Nombre de mois : </label>
			<input id="mois" name="mois" type="text" value="" size="10" maxlength="8"/>
		<br>
		<p></p>	
			<label for="annee">Nombre d'annee : </label>
			<input id="annee" name="annee" type="text" value="" size="10" maxlength="8"/>
		<br>
		<p></p>		
	    	<label for="repas">Repas midi : </label>
			<input id="repas" name="repas" type="text" value="" size="10" maxlength="8"/>
	    <br>
	    <p></p>
	    	<label for="nuit">Nombre de nuit : </label>
			<input id="nuit" name="nuit" type="text" value="" size="10" maxlength="8"/>
	    <br>
	    <p></p>
	    	<label for="etape">Etape : </label>
			<input id="etape" name="etape" type="text" value="" size="10" maxlength="8"/>
	    <br>
	    <p></p>
	    
	    <!--  <label for="montant">Montant Valide : </label>
			<input id="montant" name="montant" type="text" value="" size="10" maxlength="8"/>
		<br>
		<p></p>	-->
		
	    	<label for="km">Nombre de kilometre : </label>
			<input id="km" name="km" type="text" value="" size="10" maxlength="8"/>
	    <br>
	    <p></p>
			<label for="etat">Etat de la fiche : </label>
			<select size="1" id="etat" name="etat" >
				<?php
                $sql = "SELECT * from Etat";
                $results = tableSQL($sql);

                foreach ($results as $row) {
                $numero = $row['numero'];	
                $libelle = $row['libelle'];
                ?>  
    			<option value="<?php echo $numero?>"><?php echo $libelle?></option>	
				<?php
                }
                ?>
			</select>
				<div>
				<p></p>
   				 <input type="submit" value="envoyer"/>
 			 </div>	
 				
</fieldset>

						
						
						
        

	</form>

</body>

</html>