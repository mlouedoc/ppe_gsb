<?php
include '../include/top.php';
include '/AccesDonnee/connectAD.php';
   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<title>GSB ENTERPRISE</title>
<link href="../styles/default.css" rel="stylesheet" type="text/css"/>

</head>

<div class="contenu" >
  
  <h2><u>Liste des visiteurs</u></h2>
  
  
  
  <!-- Bouton ajouter -->
  
  
  <table>
  
  <tr class="ajout">
  
  <td><h3>AJOUTER</h3></td>
  <td> <a href="AjoutVisiteur.php"><img src="../images/add.png" style="width: 49px;"></a></td>
  </tr>
  </table>




<table  style="margin:0px auto;max-width:1110px;">
      <thead>
        <!-- titre des colones -->
        <tr height="50">
        
          <th width="20%"><strong>NOM </strong></th>
          <th width="20%">PRENOM</th>
          <th width="33%">DATE</th>
          <th width="13%">SUPPRIMER &nbsp</th>
          <th width="13%">&nbsp MODIFIER</th>
          
        </tr>
      </thead>

<?php
        //insertion de la connection a la base de données

        //selection les infos pour visiteurs
        $sql = "SELECT id,nom,prenom,dteEmbauche FROM visiteur
                Order by nom;";

        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
        
                
      ?>

      <!-- creation des ligne des visiteur -->
      <?php $id =$row['id'];?>
        <tr>
          <td><?php echo $row['nom']; ?></td>
          <td><?php echo $row['prenom']; ?></td>
          <td><?php echo $row['dteEmbauche']; ?></td>
          <td>
          	<form id = "form_effacer" action = "deletevisiteur.php" method="get">
          	<input id="id" name="id" type="hidden" value = "<?php echo $id ?>" />
           	<input id="effacer" name ="effacer" type="image" src="../images/trash.png" alt="effacer" style="width : 50 px;" value ="supprimer" />
           	</form>
  		  </td>
  		  <td>
  		  <form id = "form_modifier" action = "modifiervisiteur1.php" method="get">
          	<input id="id" name="id" type="hidden" value = "<?php echo $id ?>" />
           	<input id="modifier" name ="modifier" type="image" src="../images/modify.png" alt="modifier" style="width : 50 px;" value ="Modifier" />
           	</form>
           	 </td>
          <tr />
          <?php
          }
        }
      ?>
          
</table>
<br />
</div>
</html>
