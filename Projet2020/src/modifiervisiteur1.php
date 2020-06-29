<?php
include '../include/top.php';
include '/AccesDonnee/connectAD.php';
   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
                      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
</head>

<body>

 
 <?php 
    $id = $_GET['id'];


        //selection les infos pour visiteurs
        //$sql = "SELECT id,idVisiteur,dateModif,nbJustificatifs FROM fichefrais;";
        $sql= "select id, nom, prenom, adresse, cp, ville from visiteur where  id='$id'";
        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
                
                

      <!-- creation des ligne des fiche -->
      <fieldset>
      <h4>Information actuelles : </h4>
      <?php $id =$row['id']; 
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $adresse = $row['adresse'];
            $cp = $row['cp'];
            $ville = $row['ville'];
            
 
           ?>
        <tr>
          <td><?php echo $nom; ?></td>
          <td><?php echo $prenom; ?></td>
          <td><?php echo $adresse; ?></td>
          <td><?php echo $cp; ?></td>
          <td><?php echo $ville; ?></td>
        </tr>
        <?php }}?>
     
     	</fieldset>
     	<fieldset>
     	
     
       <form action="modifiervisiteur2.php" method="get">
 
  			<div>
   				<input name="id" id="id" value="<?php echo $id ?>" type="hidden"/>
  			</div>
  			
  			<div>
  				<label for="nom"> Nom :</label>
  			    <input type="text" name="nom" id="nom" value="<?php echo $nom ?>"/>
  			    <p></p>
  			</div>
  			
  			<div>
  				<label for="prenom"> Prenom :</label>
  			    <input type="text" name="prenom" id="prenom" value="<?php echo $prenom ?>"/>
  			    <p></p>
  			</div>
  			<div>
  				<label for="adresse"> adresse :</label>
  			    <input type="text" name="adresse" id="adresse" value="<?php echo $adresse ?>"/>
  			    <p></p>
  			</div>
  			<div>
  				<label for="cp"> Code postal : </label>
  			    <input type="text" name="cp" id="cp" value="<?php echo $cp ?>"/>
  			   <p></p>
  			</div>
  			<div>
  				<label for="ville"> Ville de residence : </label>
  			    <input type="text" name="ville" id="ville" value="<?php echo $ville ?>"/>
  			   <p></p>
  			</div>
  			
 			 <div>
   				 <input type="submit" value="Modifier"/>
   				 <input type="reset" value="Valeur de base"/>
 			 </div>
 			 </form>
 			 
 			 
 			<form action="cloturefiche.php" method="get"> 
 			<div>
   				<input name="id" id="id" value="<?php echo $id ?>" type="hidden"/>
  			</div>
 			<div>
   				 <input type="submit" value="Cloturer"/>
 			 </div>
		</form>
       
       
       
       </fieldset>

</body>
</html>