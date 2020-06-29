<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>

 
 <?php 
    $id = $_GET['id'];

    include '/AccesDonnee/connectAD.php';
    include "../include/top.php";
        //selection les infos pour visiteurs
        //$sql = "SELECT id,idVisiteur,dateModif,nbJustificatifs FROM fichefrais;";
        $sql= "select fichefrais.id,nom,prenom, mois, annee, nbJustificatifs, montantValide,dateModif from fichefrais INNER JOIN visiteur where idVisiteur = visiteur.id AND  fichefrais.id =$id";
        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                
                

      <!-- creation des ligne des fiche -->
      <fieldset>
      <h4>Informations actuelles : </h4>
      <?php $id =$row['id']; 
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            
            $mois = $row['mois'];
            $annee = $row['annee'];
            $nbJustificatifs = $row['nbJustificatifs'];
            $montantValide = $row['montantValide'];
            //$dateModif = $row['dateModif']
           ?>
        <tr>
         
          <td><?php echo "Nom : ".$nom."</br>"; ?></td>
          <td><?php echo "Prenom : ".$prenom."</br>";?></td>
          <td><?php echo "mois : ".$mois."</br>"; ?></td>
          <td><?php echo "annee : ".$annee."</br>"; ?></td>
        </tr>
        <?php }}?>
     
     	</fieldset>
     	<fieldset>
     	
     <div>
       <form action="modifierfiche2.php" method="get">
  			<div>
   				<input name="id" id="id" value="<?php echo $id ?>" type="hidden"/>
  			</div>
  			
  			<div>
  				<label for="nom"> Mois</label>
  			    <input type="text" name="mois" id="mois" value="<?php echo $mois ?>"/>
  			    <p></p>
  			</div>
  			
  			<div>
  				<label for="annee"> Annee</label>
  			    <input type="text" name="annee" id="annee" value="<?php echo $annee ?>"/>
  			    <p></p>
  			</div>
  			<div>
  				<label for="nbJustificatifs"> Nombre de justificatifs</label>
  			    <input type="text" name="nbJustificatifs" id="nbJustificatifs" value="<?php echo $nbJustificatifs ?>"/>
  			    <p></p>
  			</div>
  			<div>
  				<label for="montantValide"> Montant a valider</label>
  			    <input type="text" name="montantValide" id="montantValide" value="<?php echo $montantValide ?>"/>
  			   <p></p>
  			</div>
  			
  			
 			 <div>
   				 <input type="submit" value="Modifier"/>
 			 </div>
		</form>
       </div>
       
       
       </fieldset>

</body>
</html>