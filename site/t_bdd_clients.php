<?php
	include("connect_bdd.php");
	include("bdd_clients.php");
	
	$test = connect_bdd();
	
	if($test)
	{
		$test = bdd_clients($mails, $pass);
		if($test)
		{
			foreach($mails as $value)
			{
				echo $value.'<br>';
			}
			foreach($pass as $value)
			{
				echo $value.'<br>';
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