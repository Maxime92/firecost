<?php
	function add_company($social_reason,$type_of_society,$adress,$adress2,$city,$state,$code,$pays,$rep_lname,$rep_fname,$rep_number,$rep_post,$rep_mail,$pass_ent)
	{
		$sql = "INSERT INTO entreprises (nom_ent,type_societe,adresse_ent1,adresse_ent2,ville_ent,etat_ent,postal_ent,pays_part,nom_rep,prenom_rep,num_rep,poste_rep,mail_rep,pass_ent) VALUES ('".$social_reason."','".$type_of_society."','".$adress."','".$adress2."','".$city."','".$state."','".$code."','".$pays."','".$rep_lname."','".$rep_fname."','".$rep_number."','".$rep_post."','".$rep_mail."','".$pass_ent."')";
		$sql = mysql_query($sql);
		
		if($result = mysql_query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>