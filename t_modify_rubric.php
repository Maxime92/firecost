<?php
	include("connect_bdd.php");
	include("modify_rubric.php");
	
	$test = connect_bdd();
	
	if($test)
	{
		$sql ="SELECT * FROM rubriques;";
		$resultat=mysql_query($sql);
		while ($data = mysql_fetch_array($resultat)) 
		{ 
			echo 'Nom rubrique : '.$data['nom_rub'].'<br />';  
		}
		$old="video";
		$new="video2";
		modify_rubric($old,$new);
		
		$sql ="SELECT * FROM rubriques;";
		$resultat=mysql_query($sql);
		while ($data = mysql_fetch_array($resultat)) 
		{ 
			echo 'Nouveau nom rubrique : '.$data['nom_rub'].'<br />';  
		}
	}
	else
	{
		echo "Erreur dans la connexion à la bdd";
	}
?>