<?php
    include "/AccesDonnee/connectAD.php";

	//on recupere les varirable issue du formulaire
    $idVisiteur=$_GET['idVisiteur'];
    $repas=$_GET['repas'];
	$dateModif = date('Y-m-d');
	$mois=$_GET['mois'];
	$annee=$_GET['annee'];
	$nuit=$_GET['nuit'];
	$etape=$_GET['etape'];
	$km=$_GET['km'];
	$etat = $_GET['etat'];
	/*$montant = $_GET['montant'];*/
	/*echo $idVisiteur;
	echo $nbjustificatifs;
	echo $dateModif;
	echo $mois;
	echo $annee;
	echo $montant;
	echo $etat;*/
	
	
	if ($mois<13){
	    $sql = "INSERT INTO fichefrais (idVisiteur, mois, annee, dateModif, idEtat) 
                VALUES ('".$idVisiteur."', '".$mois."', '".$annee."', '".$dateModif."', '".$etat."');";
	    
	    $result = executeSQL($sql);
	        
	        if($result) {	                
	
	        $sql = "select id from fichefrais 
                where (idVisiteur = '".$idVisiteur."'
                AND mois =  '".$mois."'
                AND annee = '".$annee."'
                AND dateModif =  '".$dateModif."' 
                AND idEtat = '".$etat."');";
	            
	            $result = executeSQL($sql);
	            while ($row = mysqli_fetch_array($result)) {
	                
	                
	               
       $id =$row['id'];
	            
	        $sql = "INSERT INTO lignefraisforfait (idFicheFrais, idForfait, quantite)
                VALUES ('".$id."', 'ET', '".$etape."');";
	        $result = executeSQL($sql);
	        
	        $sql = "INSERT INTO lignefraisforfait (idFicheFrais, idForfait, quantite)
                VALUES ('".$id."', 'KM', '".$km."');";
	        $result = executeSQL($sql);
	        
	        $sql = "INSERT INTO lignefraisforfait (idFicheFrais, idForfait, quantite)
                VALUES ('".$id."', 'NUI', '".$nuit."');";
	        $result = executeSQL($sql);
	        
	        $sql = "INSERT INTO lignefraisforfait (idFicheFrais, idForfait, quantite)
                VALUES ('".$id."', 'RE', '".$repas."');";
	        $result = executeSQL($sql);
	        $id += 1;
	        echo "<meta http-equiv='refresh' content='0;url=gestionfiche.php?message=<font color=green> Ajout realise </font>'>";
	        
	            }}}
	    else{
	        echo "une erreur est survenue, veuiller controle les informations rentre";
	    }
	    
	
	/*$sql = "INSERT INTO fichefrais (idVisiteur, mois, annee, nbJustificatifs, montantValide, dateModif) VALUES (".$id.", '".$mois."', '".$annee."', '".$justification."', '".$montant."', '".$modification."');";

	$result = executeSQL_GE($sql);
	
	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=0124_frmsaisirV1.php?message=<font color=green> Ajout realise </font>'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=0124_frmsaisirV1.php?message=<font color=red> Le numero existe deja... </font>'>";*/

?>