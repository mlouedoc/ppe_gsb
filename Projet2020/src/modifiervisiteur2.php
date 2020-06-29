<?php
include '/AccesDonnee/connectAD.php';

//on recupere les varirable issue du formulaire
$id = $_GET['id'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$adresse = $_GET['adresse'];
$cp = $_GET['cp'];
$ville = $_GET['ville'];


$sql= "UPDATE visiteur
       SET nom='$nom', prenom = '$prenom', adresse = '$adresse', cp = '$cp', ville = '$ville'
       WHERE id = '$id';";

$result = executeSQL($sql);


if ($result){
    echo "modification realise";
    echo "<meta http-equiv='refresh' content='0;url=gestionvisiteur.php?message=<font color=green> Ajout realise </font>'>";
}
else{
        echo "une erreur est survenue, veuiller controle les informations rentre";
}

?>