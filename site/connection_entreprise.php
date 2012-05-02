<?php

function connectionEntreprise($email,$password)
{
	$select = "SELECT * FROM entreprises WHERE mail_rep = " . $email . " AND pass_rep = " . $password;
	$request =  mysql_query($select);
	$result = mysql_fetch_array($request);
	return $result;
}

?>