<?php
	function connect_bdd()
	{
		$server = "localhost";
		$user = "root";
		$pw = "";
		$database = "firecost";
		if($id = mysql_connect($server, $user, $pw))
		{
			if(mysql_select_db($database))
			{
				return true;
			}
			else
			{
				echo "Problème de connection à la base.";
				return false;
			}
		}
		else
		{
			echo "Echec de connection au serveur";
			return false;
		}
	}
?>