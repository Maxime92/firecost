<?php 

include_once("connect_db.php");
include_once("connection_ent.php");

	
$connect = connect_bdd();
	if ($connect)
	{
		$client = connectionEntreprise($_POST['email'], $_POST['password']);
	}
		
if (empty($client))
		{
			echo "email/password invalide";
		}
		else
		{
			include_once("page_d'accueil2.php")
		}
	else
	{
		echo "connexion fail";
	}
?>