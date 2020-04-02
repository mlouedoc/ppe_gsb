<?php
include 'tindex.php';
   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<title>GSB ENTERPRISE</title>
<link href="default.css" rel="stylesheet" type="text/css"/>

</head>

<div class="contenu" style="background-color:white;display: block;margin-left: auto; margin-right: auto; text-align: center; ">
  
  <h2 style="text-align: left; padding-left:2%"><u>Liste des fiches de frais</u></h2>
  
  
 
  <!-- Bouton ajouter -->
  <!-- 
  
  <table style="text-align: right; margin-left: 1208px;">
  
  <tr style="background: #fff">
  
  <td><h3>AJOUTER</h3></td>
  <td> <a href="AjoutVisiteur.php"><img src="add.png" style="width: 49px;"></a></td>
  </tr>
  </table>-->




<table  style="margin:0px auto;max-width:1110px;">
      <thead>
        <!-- titre des colones -->
        <tr height="50">
        
          <th width="20%"><strong>id Visiteur </strong></th>
          <th width="20%">date de modification</th>
          <th width="33%">nombre de justificatifs</th>
          <th width="13%">SUPPRIMER &nbsp</th>
          <th width="13%">&nbsp MODIFIER</th>
          
        </tr>
      </thead>

<?php
        //insertion de la connection a la base de données
        include 'connectAD.php';

        //selection les infos pour visiteurs
        $sql = "SELECT id,idVisiteur,dateModif,nbJustificatifs FROM fichefrais;";
        $result = executeSQL($sql);
        if($result) {
            while ($row = mysqli_fetch_array($result)) {
        
                
      ?>

      <!-- creation des ligne des fiche -->
      <?php $id =$row['id'];?>
        <tr>
          <td><?php echo $row['idVisiteur']; ?></td>
          <td><?php echo $row['dateModif']; ?></td>
          <td><?php echo $row['nbJustificatifs']; ?></td>
          <td><input  type="button" class="button" name="btnvide" value="Vider la table" onclick="if(confirm('Voulez-vous Supprimer')) self.location.href='delete.php'?Id=$id" /></td>
          <td><img src="modify.png" style="width: 49px;" ></td>
          <tr />
          <?php
          }
        }
      ?>
        
       
          
</table>
<br />
</div>
</html>
