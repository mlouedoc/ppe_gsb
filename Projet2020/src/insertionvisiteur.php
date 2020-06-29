<?php
    include '/AccesDonnee/connectAD.php';

	//on recupere les varirable issue du formulaire
    $id=$_GET['id'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$adresse=$_GET['adresse'];
	$cp=$_GET['cp'];
	$ville=$_GET['ville'];
	$pwd=$_GET['pwd'];
	$login=$_GET['login'];
	$dteEmbauche = $_GET['dteEmbauche'];

	
	
	    $sql = "INSERT INTO visiteur (id, nom, prenom, adresse, cp, ville, dteEmbauche, pwd, login) 
                VALUES ('".$id."', '".$nom."', '".$prenom."', '".$adresse."', '".$cp."', '".$ville."', '".$dteEmbauche."', '".$pwd."', '".$login."');";
	    
	    $result = executeSQL($sql);
	        
	    if($result){
	        echo "<meta http-equiv='refresh' content='0;url=gestionvisiteur.php?message=<font color=green> Ajout realise </font>'>";
	        
	            }
	    else{
	        echo "une erreur est survenue, veuiller controle les informations rentre";
	    }