<?php
include '/AccesDonnee/connectAD.php';


$valide = $_GET['validation'];
$id = $_GET['id'];
$mois = $_GET['mois'];
$annee = $_GET['annee'];

if($valide=="valide"){
    $sql= "UPDATE fichefrais
            SET idEtat='5'
            WHERE fichefrais.id ='$id'
            AND fichefrais.mois ='$mois'
            AND fichefrais.annee ='$annee';";
    $result = executeSQL($sql);
    
    if ($result) {
        echo "<meta http-equiv='refresh' content='0;url=validationfiche1.php?'>";
    }
    else{
        echo "une erreur est survenu";
    }
}
else{
    $sql= "UPDATE fichefrais
            SET idEtat='6'
            WHERE fichefrais.id ='$id'
            AND fichefrais.mois ='$mois'
            AND fichefrais.annee ='$annee';";
    $result = executeSQL($sql);
    
    if ($result) {
        echo "<meta http-equiv='refresh' content='0;url=validationfiche1.php?'>";
    }
    else{
        echo "une erreur est survenu";
    }
}

 ?>
    