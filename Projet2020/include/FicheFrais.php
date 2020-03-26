<?php include 'tindex.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<title>GSB ENTERPRISE</title>
<link href="default.css" rel="stylesheet" type="text/css"/>

</head>

<div class="contenu">
<fieldset style="background-color:white;">
    <img class="logo" src="gsb.jpg"><br>
    <h2 align="center"><b style="color:#14266C;">ETAT DE FRAIS ENGAGES</b></h2>
    <i>a retourner au plus tard le 10 du mois qui suit l'engagement des frais </i></h2><br><br>
    <b>VISITEUR</b>&nbsp&nbsp&nbsp&nbsp
    Matricule : <select name="mat" id="mat">
    <option value="">------------</option></select><br>
    
    <b>....................</b>&nbsp&nbsp&nbsp
    Nom :
    <input type="text" id="name" name="name" required
       minlength="4" maxlength="8" size="10"><br><br><br>
    
    <b>Mois</b>&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="mois" name="mois" required
       minlength="4" maxlength="8" size="10"><br><br><br>
       
       
    <table border="1">
        <tr>
            <td><i>Frais Forfaitaires  </i></td>
            <td><i> Quantité   </i></td>
            <td><i> Montant Unitaire   </i></td>
            <td><i> Total</i></td>
        </tr>
        <tr>
            <td style="width: 32%;">Nuitée</td>
            <td></td>
            <td style="width: 40%;" align="right">80.00</td>
            <td style="width: 34%;"></td>
        </tr>
        <tr>
            <td>Repas midi</td>
            <td></td>
            <td align="right">29.00</td>
            <td></td>
        </tr>
        <tr>
            <td>Kilometrage</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table><br>
    <br><br><br><hr>
    <h4 align="right"><b style="color:#14266C;">Signature</b></h4>
    <br>
    <center><a href="FicheDeFrais.pdf">
   <button>Imprimer</button>
</a></center>
    <br><br>
    
    
    </fieldset>

</div>





</form>
</html>