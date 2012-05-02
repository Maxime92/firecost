<?php
	include("connect_bdd.php");
	include("bdd_rubrics.php");
	
	$test = connect_bdd();
	
	if($test)
	{
		$rubriques = bdd_rubrics();
		if($rubriques != false)
		{
			foreach($rubriques as $value)
			{
				echo $value;
			}
		}
		else
		{
			echo "il a du y avoir une erreur dans ta requête...";
		}
	}
	else
	{
		echo "erreur dans ta connexion à la bdd";
	}
?>