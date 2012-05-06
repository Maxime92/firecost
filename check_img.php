<?php
	list($width, $height, $type, $attr) = getimagesize("URL");
	echo "$type $attr <br/>";
	if($type != 2 && $type != 3)
	{
		$verif=0;
		echo "Format d'image incompatible. Veuillez choisir une image de type .jpg ou .png";
	}
	else if($type == 2 || 3)
	{
		if(($width < 100 || $width > 300) && ($height < 100 || $height > 300))
		{
			$verif=0;
			echo "Les dimensions de l'image sont incorrects. Veuillez choisir une image dont les dimensions sont supérieures à 100px et inférieures à 300px";
		}
		else if(($width >= 100 && $width <= 300) && ($height >= 100 && $height <= 300))
		{
			$verif=1;
		}
	}
	else
	{
		$verif=0;
		echo "erreur, veuillez contacter un administrateur";
	}
?>