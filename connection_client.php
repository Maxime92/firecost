<?php

function connectionClient($email,$password)
{
	$select = "SELECT * FROM particuliers WHERE mail_part = " . $email . " AND pass = " . $password;
	$request =  mysql_query($select);
	$result = mysql_fetch_array($request);
	return $result;
}

?>