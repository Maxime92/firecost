<?php
	function bdd_sales(&$price, &$begin_time, &$end_time, &$name_product, &$nb_product, &$description, &$decr_price, &$nb_decr, &$pic)
	{
		$request_sales = "SELECT prix, date_debut, date_fin, nb_article, nom_article, description1, prix_decr, nb_decr, image FROM ventes ORDER BY date_fin;";
		$test = false;
		
		if($result = mysql_query($request_sales))
		{
			while($ligne = mysql_fetch_array($result))
			{
				$price[] = $ligne["prix"];
				$begin_time = $ligne["date_debut"];
				$end_time = $ligne["date_fin"];
				$name_product = $ligne["nom_article"];
				$nb_product = $ligne["nb_article"];
				$description = $ligne["description1"];
				$decr_price = $ligne["prix_decr"];
				$nb_decr = $ligne["nb_decr"];
				$pic = $ligne["image"];
			}
			$test = true;
		}
		else
		{
			echo "Problème dans ta requête";
		}
	}
	return $test;
?>