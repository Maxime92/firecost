<?php
	function bdd_clients(&$mails, &$pass)
	{
		$request_mails = "SELECT mail_part, pass FROM particuliers;";
		$test = false;
		
		if($result = mysql_query($request_mails))
		{
			while ($ligne = mysql_fetch_array($result))
			{
				$mails[] = $ligne["mail_part"];
				$pass[] = $ligne["pass"];
			}
			$test = true;
		}
		else
		{
			echo "Problème dans ta requête";
		}
		
		return $test;
	}
?>