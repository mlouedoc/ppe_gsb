<?php
include '/AccesDonnee/connectAD.php';

$id= $_GET['id'];

	
	$sql = "DELETE FROM visiteur WHERE id='$id'";
	
	$result = executeSQL($sql);
	
	if ($result)
	    echo "<meta http-equiv='refresh' content='0;url=gestionvisiteur.php?message=<font color=green> Suppression realisee </font>'>";
	    else
	        echo "<meta http-equiv='refresh' content='0;url=gestionvisiteur.php?message=<font color=red> Probleme de suppression... </font>'>";	

?>
