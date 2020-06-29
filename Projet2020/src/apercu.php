<?php 

include '/AccesDonnee/connectAD.php';
include "../include/top.php";
?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="content-language" content="fr" />
	<title>Saisir les information</title>
	<link href="../styles/default.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<table  style="margin:0px auto;max-width:80%;text-align:center;">
      <thead>
        <!-- titre des colones -->
        <tr height="50">
        
          <th width="20%"><strong>Situation</strong></th>
          <th width="20%">Date Operation</th>
          <th width="33%">Repas</th>
          <th width="13%">nuitee</th>
          <th width="13%">etape</th>
          <th width="13%">kilometre</th>          
        </tr>
      </thead>


<?php 

$id = $_GET['id'];


$sql= "select fichefrais.id,dateModif, etat.libelle 
from fichefrais,visiteur, etat 
where idVisiteur = visiteur.id 
AND etat.numero=fichefrais.idEtat 
AND fichefrais.id =$id";
$result1 = executeSQL($sql);

if ($result1) {
    while ($row = mysqli_fetch_array($result1)) {
        
        
        ?>

      <!-- creation des ligne des fiche -->
      <?php $id =$row['id'];?>
      <tr>
        <td><?php echo $row['libelle']; ?></td>
          <td><?php echo $row['dateModif']; ?></td>
          
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
              
          
        </tr> 
<?php 
}
}
?>
</table>
<p></p>
<form  name="retour" action="gestionfiche.php" method="post">
<input class="retour" type="submit" value="Retour">
</form>

</html>