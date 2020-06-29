<?php @session_start();

	//securite : démarre la tamporisation de sortie. Tant qu'elle est enclench�e, aucune donn�e, hormis les en-t�tes,
	//n'est envoy�e au navigateur, mais temporairement mise en tampon.
    ob_start();

	include 'AccesDonnee/connectAD.php';

	// on recupere l'identifiant et le mdp si renseignes
	// verification cote du serveurt
	// une verification sera faite cote client en JavaScript
	if  ((!empty($_GET['name'])) && (!empty($_GET['password']))) {

        //recupere les variables
		$myusername=$_GET['name'];
		$mypassword=$_GET['password'];

		//$mypassword=md5($mypassword);
		
		// creation de la requete de test l'existance de l'utilisateur et de la validite de son mpd
    	$sql="SELECT * FROM user WHERE login='$myusername' and password='$mypassword'";
		echo $sql; 
       
		// on recupere le nombre de resultats de la requete
		$count=compteSQL($sql);

		// si l'utilisateur existe et le mot de passe est correct alors $count=1
    	if ($count == 1) {
			// on enregistre le username dans une variables de sessions
			// et on fait une redirection vers le fichier  "accueil.php"
    	    $result = executeSQL($sql);
    	    while ($row = mysqli_fetch_array($result)) {
    	        $_SESSION['id'] =$row['id'];
    	    }
    	    
			$_SESSION['myusername'] = $myusername;
			echo "<meta http-equiv='refresh' content='0;url=accueil.php'>";
		}
		//probleme avec l'utilisateur ou le mdp
		else {
			//detruit la session
			session_destroy();
			//rappel la page de login avec un message
			echo "<meta http-equiv='refresh' content='0;url=index.php?message=Utilisateur ou mot de passe non valide'>";
		}

	} else
        //test cote serveur les champs n'ont pas ete remplis
			echo "<meta http-equiv='refresh' content='0;url=index.php?message=Renseigner les deux champs'>";
		
	//Envoie les donn�es du tampon de sortie et �teint la tamporisation de sortie
	ob_end_flush();
?>