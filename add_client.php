<?php
	function add_client(&$month, &$day, &$year)
	$month = $_POST['month'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$date = $year."-".$mounth."-".$day;
	$sql = "INSERT INTO particuliers (prenom,nom_part,adresse_part1,adresse_part2,ville_part,etat_part,postal_part,pays_part,dtnaiss,datemail,pass) VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["adress"]."','".$_POST["adress2"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["code"]."','".$_POST["pays"]."','".$date."','".$_POST["mail"]."','".$_POST["password"]."');";
                          $sql = mysql_query($sql);
?>