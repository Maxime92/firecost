<?php
	function bdd_rubrics(&$rubrics)
	{
		$request_rubric = "SELECT nom_rub FROM rubriques GROUP BY rub_id;";
		
		if($result = mysql_query($request_rubric))
		{
			while($ligne = mysql_fetch_array($result))
			{
				$rubrics[] = $ligne["nom_rub"];
			}
			return true;
		}
		else
		{
			echo "Problème dans ta requête";
			return false;
		}
	}
?>