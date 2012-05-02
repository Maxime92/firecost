<?php
	function modify_rubric(&$oldRubric, &$newRubric)
	{
		$request_rubric = "SELECT nom_rub FROM rubriques GROUP BY rub_id;";
		
		if($result = mysql_query($request_rubric))
		{
			$sql = 'UPDATE rubriques SET nom_rub="'.$newRubric.'" WHERE nom_rub="'.$oldRubric.'";';
			$result2 = mysql_query($sql);
			return true;
		}
		else
		{
			echo "Problème dans ta requête";
			return false;
		}
	}
?>