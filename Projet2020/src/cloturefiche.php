<?php
include '/AccesDonnee/connectAD.php';

	//on recupere les varirable issue du formulaire
    $id=$_GET['id'];
    

    
    
    
    $sql= "UPDATE fichefrais SET idETAT = '1' WHERE idETAT='3' AND idVisiteur ='$id';";
    
    $result = executeSQL($sql);
    
    
    if ($result){
        echo "<meta http-equiv='refresh' content='0;url=gestionvisiteur.php?message=<font color=green> Ajout realise </font>'>";
    }
    else{
        echo "une erreur est survenue";
    }
    
    ?>