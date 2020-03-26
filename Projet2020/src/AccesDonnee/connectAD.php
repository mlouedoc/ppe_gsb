<?php
require_once('AccesDonnees.php');

$ip = explode(".",adresseIPV4($_SERVER['SERVER_ADDR']));

switch ($ip[0])
{
        case 71 :
        /*case 203 :
            $host = "localhost";
            $user = "id7120716_student";
            $password = "Iroise29";
            $dbname = "id7120716_si6";
            $port = "3306";
            break;
          */  
        case 127 :
        case 192 :
            $host = "127.0.0.1";
            $user = "root";
            $password = "";
            $dbname = "gsb";
            $port = "3306";
            break;
            
        default:
            echo ("Serveur non reconnu $ip[0]<br />");
            echo "<pre>";
            print_r($_SERVER);
            echo "SERVER_ADDR : ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];
            echo " -- IPV4 : ".adresseIPV4($_SERVER['SERVER_ADDR'])."<br />";
            echo "REMOTE_ADDR : ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT'];
            echo " -- IPV4 : ".adresseIPV4($_SERVER['REMOTE_ADDR'])."<br />";
            exit("</pre>");
            break;
}

$connexion=connexion($host,$port,$dbname,$user,$password);

if (!$connexion) {
    echo "Echec Connexion<br />";
} else {

    echo "<pre>";
    //echo "Connexion reussie<br />";
   /* echo "Server addr : ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT'];
    echo " -- IPV4 : ".adresseIPV4($_SERVER['SERVER_ADDR'])."<br />";
    echo "Remote addr : ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT'];
    echo " -- IPV4 : ".adresseIPV4($_SERVER['REMOTE_ADDR'])."<br />";
    echo "Host : $host:$port<br />";
    echo "Utilisateur : $user";
   */ echo "</pre>";
}
?>