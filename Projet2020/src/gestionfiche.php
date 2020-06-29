<?php
include '../include/top.php';
   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<title>GSB ENTERPRISE</title>
<link href="../styles/default.css" rel="stylesheet" type="text/css"/>

</head>

<div class="contenu" >
  
  <h2>Liste des fiches de frais</h2>
  
  
 
  <!-- Bouton ajouter -->
   
  
  <table>
  
  <tr class = "ajout">
  
  <td><h3>AJOUTER</h3></td>
  <td> <a href="insertfiche.php"><img src="../images/add.png" style="width: 49px;"></a></td>
  </tr>
  </table>




<table  style="margin:0px auto;max-width:1110px;">
      <thead>
        <!-- titre des colones -->
        <tr height="50">
        
          <th width="20%"><strong>Nom visiteur</strong></th>
          <th width="20%">Prenom visiteur</th>
          <th width="10%">Mois</th>
          <th width="10%">Annee</th>
          <th width="10%">Supprimer</th>
          <th width="10%">Modifier</th>
          <th width="10%">Afficher</th>
          
        </tr>
      </thead>

<?php
        //insertion de la connection a la base de données
        include 'AccesDonnee/connectAD.php';

        //selection les infos pour visiteurs
        //$sql = "SELECT id,idVisiteur,dateModif,nbJustificatifs FROM fichefrais;";
        $sql= "select fichefrais.id,nom,prenom, mois, annee from fichefrais INNER JOIN visiteur where idVisiteur = visiteur.id AND fichefrais.idEtat!='5';";
        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
        
                
      ?>

      <!-- creation des ligne des fiche -->
      <?php $id =$row['id'];?>
        <tr>
          <td><?php echo $row['nom']; ?></td>
          <td><?php echo $row['prenom']; ?></td>
          <td><?php echo $row['mois']; ?></td>
          <td><?php echo $row['annee']; ?></td>
          <td>
          	<form id = "form_effacer" action = "deletefiche.php" method="get">
          	<input id="id" name="id" type="hidden" value = "<?php echo $id ?>" />
           	<input id="effacer" name ="effacer" type="image" src="../images/trash.png" alt="supprimer" style="width : 50 px;" value ="supprimer" />
           	</form>
  		  </td>
  		  <td>
  		  <form id = "form_modifier" action = "modifierfiche1.php" method="get">
          	<input id="id" name="id" type="hidden" value = "<?php echo $id ?>" />
           	<input id="modifier" name ="modifier" type="image" src="../images/modify.png" alt="modifier" style="width : 50 px;" value ="Modifier" />
           	</form>
           	 </td>
  		  <td>
           <form id = "form_voir" action = "apercu.php" method="get">
          	<input id="id" name="id" type="hidden" value = "<?php echo $id ?>" />
           	<input id="apercu" name ="apercu" type="image" src="../images/modify.png" alt="voir" style="width : 50 px;" value ="apercu" />
           </form>
  		  </td>
          <!-- <td><img src="modify.png" style="width: 49px;" ></td> -->
          <tr />
          <?php
          }
        }
      ?>
          
</table>
<br />
</div>
</html>
