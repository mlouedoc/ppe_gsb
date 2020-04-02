<?php
include 'connectAD.php';
/*
CREATE TABLE IF NOT EXISTS `test` (
		`numero` int(11) NOT NULL AUTO_INCREMENT,
		`info` char(20) NOT NULL,
		PRIMARY KEY (`numero`),
		UNIQUE KEY `info` (`info`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
*/


// $sql = "ALTER TABLE `test` ADD UNIQUE( `info`);";


	//on recupere les varirable issue du formulaire
;

	
	$sql = "DELETE FROM user WHERE id=".$id;
	
	$result = executeSQL($sql);
	
	if ($result)
	    echo "<meta http-equiv='refresh' content='0;url=frmdeleteV2.php?message=<font color=green> Suppression realisee </font>'>";
	    else
	        echo "<meta http-equiv='refresh' content='0;url=frmdeleteV2.php?message=<font color=red> Probleme de suppression... </font>'>";	

?>
