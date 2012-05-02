<?php

	$sql = "INSERT INTO rubriques (nom_rub) VALUES ('".$_POST["rubric_name"]."')";
                          $sql = mysql_query($sql);
?>