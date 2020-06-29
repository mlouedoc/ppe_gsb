<?php
include '/AccesDonnee/connectAD.php';

//on recupere les varirable issue du formulaire
$id = $_GET['id'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];
$nbJustificatifs = $_GET['nbJustificatifs'];
$montantValide = $_GET['montantValide'];
$dateModif = date('Y-m-d');

/*
echo $id."<br/>";
echo $mois."<br/>";
echo $annee."<br/>";
echo $nbJustificatifs."<br/>";
echo $montantValide."<br/>";
echo $dateModif."<br/>";*/

if ($mois<13){
$sql= "UPDATE fichefrais
       SET mois='$mois', annee = '$annee', nbJustificatifs = '$nbJustificatifs', montantValide = '$montantValide', dateModif = '$dateModif', idEtat='3'
       WHERE id = '$id';";

$result = executeSQL($sql);


if ($result){
    echo "ajout realise";
    echo "<meta http-equiv='refresh' content='0;url=gestionfiche.php?message=<font color=green> Ajout realise </font>'>";
}}
else{
        echo "une erreur est survenue, veuiller controle les informations rentre";
}

?>