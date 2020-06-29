<?php
   ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>GSB ENTERPRISE</title>
<link href="../styles/default.css" rel="stylesheet" type="text/css"/>

</head>


</head>

<body>

<?php session_start();

switch ($_SESSION['id']) {
    case 1:
        ?>
        <body>
        <div id="PageCentrale">
        <div id="BandeMenuHaut" class="ParamOpaciteMenu">
        <ul id="MenuRubriques">
        <li><img src="../images/gsb.png"  alt="Logo GSB" width = 2%; height = 2%;/>
        <li id="active"><a href="../src/accueil.php" id="current">Accueil</a></li>
        <li><a href="../src/gestionfiche.php">Fiches de frais</a></li>
        <li><a href="../src/gestionvisiteur.php">Visiteurs</a></li>
        <li><a href="../src/validationfiche1.php">Valider une fiche</a></li>
        <li><img src="../images/gsb.png" alt="Logo GSB" width = 2% height = 2%></li>
        </ul>
        </div>
        </div>
        <?php 
        break;
    case 2: 
    ?>
        <body>
        <div id="PageCentrale">
        <div id="BandeMenuHaut" class="ParamOpaciteMenu">
        <ul id="MenuRubriques">
        <li><img src="../images/gsb.png"  alt="Logo GSB" width = 2%; height = 2%;/>
        <li id="active"><a href="accueil.php" id="current">Accueil</a></li>
        <li><a href="../src/gestionfiche.php">Fiches de frais</a></li>
        <li><a href="../src/validationfiche1.php">Valider une fiche</a></li>
        <li><img src="../images/gsb.png" alt="Logo GSB" width = 2% height = 2%></li>
        </ul>
        </div>
        </div>
        
     <?php 
     break;
    case 3: 
    ?>
        <body>
        <div id="PageCentrale">
        <div id="BandeMenuHaut" class="ParamOpaciteMenu">
        <ul id="MenuRubriques">
        <li><img src="../images/gsb.png"  alt="Logo GSB" width = 2%; height = 2%;/>
        <li id="active"><a href="accueil.php" id="current">Accueil</a></li>
        <li><a href="../src/gestionvisiteur.php">Visiteurs</a></li>
        <li><img src="../images/gsb.png" alt="Logo GSB" width = 2% height = 2%></li>
        </ul>
        </div>
        </div>
        
       <?php
       break; 
}
?>
<!--  
<body>
<div id="PageCentrale">
<div id="BandeMenuHaut" class="ParamOpaciteMenu">
<ul id="MenuRubriques">
<li><img src="gsb.png"  alt="Logo GSB" width = 2%; height = 2%;/>
<li id="active"><a href="accueil.php" id="current">Accueil</a></li>
<li><a href="gestionFichefrais.php">Fiches de frais</a></li>
<li><a href="visiteur.php">Visiteur</a></li>
<li><a href="validationfiche.php">Valider une fiche</a></li>
<li><img src="gsb.png" alt="Logo GSB" width = 2% height = 2%></li>
</ul>
</div>
</div>
-->



<img class="logo"
    				src="../images/gsb.png" 
   					 alt="Logo GSB"
    		
/>

</body>
</html>
