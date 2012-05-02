<?php
	session_start();
	include("connect_bdd.php");
	include("bdd_rubrics.php");
	
	$footer = "footer.html";
	
	$test = connect_bdd();
	if($test)
	{
		$test = bdd_rubrics($rubrics);
		if(!$test)
		{
			echo 'Il y a un problème dans ta requête';
		}
	}
	if(isset($_SESSION["pseudo"]))
	{
		$status = true;
		$header = "header_client_co.html";
	}
	else
	{
		$status = false;
		$header = "header_client_deco.html";
	}
	if(isset($_POST["action"]))
	{
		if($_POST["action"] == "home")
		{
			$body = "home.php";
			$action = true;
		}
		elseif($_POST["action"] == "my_order")
		{
			$body = "my_order.php";
			$action = true;
		}
		elseif($_POST["action"] == "inscription")
		{
			$body = "inscription.php";
			$action = true;
		}
		elseif($_POST["action"] == "FAQ")
		{
			$body = "FAQ.php";
			$action = true;
		}
		elseif($_POST["action"] == "my_account")
		{
			$body = "my_account.php";
			$action = true;
		}
		elseif($_POST["action"] == "forgot_pw")
		{
			$body = "forgot_pw.php";
			$action = true;
		}
		if(!$action)
		{
			for($i = 0; $i < $count; $i++)
			{
				if($_POST["action"] == $rubriques[$i])
				{
					$body = $rubriques[$i].".php";
					$action = true;
				}
			}
		}
		if(!$action)
		{
			$body = "home.php";
		}
	}
	else
	{
		$body = "home.php";
	}
	include($header);
	include($body);
	include($footer);
?>