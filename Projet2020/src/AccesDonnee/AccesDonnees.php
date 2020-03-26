<?php
   $modeacces = "mysqli";
    
function connexion($host,$port,$dbname,$user,$password) {       
        global $modeacces, $connexion;
        
        if ($modeacces=="mysql") {
            @$link = mysql_connect("$host", "$user", "$password")
            or die("Erreur de connexion : ".mysql_error());
            if ($link) {
                @$connexion = mysql_select_db("$dbname")
                or die("Erreur de connexion : ".mysql_error());
                return $connexion;
            }
        }
        
        if ($modeacces=="mysqli") {
            @$connexion = mysqli_connect("$host", "$user", "$password", "$dbname", $port);
            if (mysqli_connect_errno($connexion)) {
                die("Erreur de connexion : ".mysqli_connect_error($connexion));
            }
            return $connexion;
        }
        
    }  
   
function deconnexion() {      
    global $modeacces, $connexion;
    
    if ($modeacces=="mysql") {
        @mysql_close();
    }
    
    if ($modeacces=="mysqli") {
        @mysqli_close($connexion);
    }
    
}

function executeSQL($sql) {     
    global $modeacces, $connexion;
    
    if ($modeacces=="mysql") {
        $result = mysql_query($sql);
        return $result;
    }
    
    if ($modeacces=="mysqli") {
        $result = mysqli_query($connexion, $sql);
        return $result;
    }
}

function erreurSQL() {
    global $modeacces, $connexion;
    
    if ($modeacces=="mysql") {
        return mysql_error();
    }
    
    if ($modeacces=="mysqli") {
        return mysqli_error_list($connexion)[0]['error'];
    }
    
}

function afficheErreur($sql) {
    
    return "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"].
    "</b>.<br />Dans le fichier : ".__FILE__.
    " a la ligne : ".__LINE__.
    "<br />".erreurSQL().
    "<br /><br /><b>REQUETE SQL : </b>$sql<br />";
    
}



function adresseIPV4($uneAdresse){
    if (strpos($uneAdresse, ":")>0) {
        $test = explode(":", $uneAdresse);
        $ip = hexdec(substr($test[1], 0, 2));
        $ip .= ".".hexdec(substr($test[1], 2, 2));
        $ip .= ".".hexdec(substr($test[2], 0, 2));
        $ip .= ".".hexdec(substr($test[2], 2, 2));
    } else {
        $ip = $uneAdresse;
    }

    return $ip;
}