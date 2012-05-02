<?php
	include("connect_bdd.php");
	include("bdd_sales.php");
	
	$test = connect_bdd();
	
	if($test)
	{
		$test = bdd_sales($price, $begin_time, $end_time, $name_product, $nb_product, $description, $decr_price, $nb_decr, $pic);
		if($test)
		{
			foreach($price as $value)
			{
				echo 'prix ='.$value.'<br>';
			}
			foreach($begin_time as $value)
			{
				echo 'heure de départ :'.$value.'<br>';
			}
			foreach($end_time as $value)
			{
				echo 'heure de fin :'.$value.'<br>';
			}
			foreach($name_product as $value)
			{
				echo 'nom du produit :'.$value.'<br>';
			}
			foreach($nb_product as $value)
			{
				echo 'nombre de produits :'.$value.'<br>';
			}
			foreach($description as $value)
			{
				echo 'description :'.$value.'<br>';
			}
			foreach($decr_price as $value)
			{
				echo 'décrémentation du prix :'.$value.'<br>';
			}
			foreach($nb_decr as $value)
			{
				echo 'nombre de ventes pas décrémentation :'.$value.'<br>';
			}
			foreach($pic as $value)
			{
				echo 'image :'.$value.'<br>';
			}
		}
		else
		{
			echo "il a du y avoir une erreur dans ta requ�te...";
		}
	}
	else
	{
		echo "erreur dans ta connexion � la bdd";
	}
?>