<?php
	$month_start = $_POST['month_start'];
	$day_start = $_POST['day_start'];
	$year_start = $_POST['year_start'];
	$date_start = $year_start."-".$mounth_start."-".$day_start;
	
	$month_end = $_POST['month_end'];
	$day_end = $_POST['day_end'];
	$year_end = $_POST['year_end'];
	$date_end	= $year_end."-".$mounth_end."-".$day_end;
	
	$sql = "INSERT INTO ventes (nom_article,description1,description2,nb_article,prix,date_debut,date_fin,prix_decr,nb_decr,) VALUES ('".$_POST["name_article"]."','".$_POST["description1"]."','".$_POST["description2"]."','".$_POST["nb_article"]."','".$_POST["price"]."','".$date_start."','".$date_end."','".$_POST["price_decr"]."','".$_POST["nb_decr"]."')";
                          $sql = mysql_query($sql);
?>