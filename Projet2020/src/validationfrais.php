<?php
include "../include/top.php";
include '/AccesDonnee/connectAD.php';
 ?>
    
    
    
    
    <html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Saisir les information</title>
</head>

<body>




<?php 


$id = $_GET['idVisiteur'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];
$datejour = date("n-Y");
$datefiche = $mois."-".$annee;


//convertion de $datefiche en format date
$dateNew = date_create_from_format("n-Y", "$datefiche")->format("n-Y");

//controle que la fiche est date du passe (pas de fiche ayant une date > au jour actuel
if($datejour>$dateNew){
    ?>
    <table style="margin:0px auto;max-width:80%;text-align:center;">
    <thead>
    <!-- titre des colones -->
    <tr>
    
    <th width="20%"><strong>Repas Midi</strong></th>
    <th width="20%">Nuitee</th>
    <th width="33%">Etape</th>
    <th width="13%">Km</th>
    <th width="13%">Situation</th>
    </tr>
    </thead>
<?php 
$sql= "select fichefrais.id,dateModif, etat.libelle 
from fichefrais,visiteur, etat 
where idVisiteur = visiteur.id 
AND etat.numero=fichefrais.idEtat 
AND fichefrais.idVisiteur ='$id'
AND fichefrais.mois ='$mois'
AND fichefrais.annee ='$annee';";
$result1 = executeSQL($sql);

if ($result1) {
    while ($row = mysqli_fetch_array($result1)) {
        
        
        ?>

      <!-- creation des ligne des fiche -->
      <?php $id =$row['id'];?>
      <tr>
          
          <td><?php  $sql1="select quantite from lignefraisforfait, fichefrais where idFicheFrais= '".$id."' and idForfait='RE'"; 
          $result = executeSQL($sql1); if ($result) {
              $row = mysqli_fetch_array($result);{ echo $row['quantite'];}}?></td>
                
                
          <td><?php  $sql1="select quantite from lignefraisforfait, fichefrais where idFicheFrais= '".$id."' and idForfait='NUI'"; 
          $result = executeSQL($sql1); if ($result) {
              $row = mysqli_fetch_array($result); { echo $row['quantite'];}}?></td>
              
           <td><?php  $sql1="select quantite from lignefraisforfait, fichefrais where idFicheFrais= '".$id."' and idForfait='ET'"; 
          $result = executeSQL($sql1); if ($result) {
              $row = mysqli_fetch_array($result); { echo $row['quantite'];}}?></td>
              
           <td><?php $sql1="select quantite from lignefraisforfait, fichefrais where idFicheFrais='".$id."' and idForfait='KM'"; 
          $result = executeSQL($sql1); if ($result) {
              $row = mysqli_fetch_array($result); { echo $row['quantite'];}}?></td>
              
          <td>
          <form id="formulaire" action="validationfiche2.php" method="get">
          <div>
 				 <input type="radio" id="valide" name="validation" value="valide">
 				 <label for="valide">Valide</label>
		 </div>

		 <div>
				<input type="radio" id="valide" name="validation" value="nonvalide">
  				<label for="valide">Non valide</label>
		</div>
		
		<div>
   				<input name="id" id="id" value="<?php echo $id ?>" type="hidden"/>
   				<input name="mois" id="mois" value="<?php echo $mois ?>" type="hidden"/>
   				<input name="annee" id="annee" value="<?php echo $annee ?>" type="hidden"/>
  		</div>
		
		
          </td>
        </tr>
        </table>
 <div>
		<input class ="envoye" type="submit" value="Envoyer"/>
		</div>
		
          </form>
<?php 
}
}

}
else{
    echo "<h2>la date ou annee est incorrecte</h2>";

}

?>


	