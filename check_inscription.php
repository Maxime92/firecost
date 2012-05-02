<?php
	
		$_POST['lname']; 
		$_POST['fname'];
		$_POST['adress'];
		$_POST['adress2'];
		$_POST['city'];
		$_POST['state'];
		$_POST['code'];
		$_POST['country'];
		$_POST['mounth'];
		$_POST['day'];
		$_POST['year'];
		$_POST['mail'];
		$_POST['password'];
		$_POST['cpassword'];
		
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$adress = $_POST['adress'];
		$adress2 = $_POST['adress2'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$code=$_POST['code'];
		$pays=$_POST['pays'];
		$mounth=$_POST['mounth'];
		$day=$_POST['day'];
		$year=$_POST['year'];
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		
		echo $day;echo $mounth;echo $year;
		
		if((empty($fname))){
			echo "Veuillez remplir le champ 'fname' ";
			include('form.php');
		}
		elseif((empty($lname))){
			echo "Veuillez remplir le champ 'lname'";
			include('form.php');
		}
		elseif((empty($adress))){
			echo "Veuillez remplir le champ 'adress'";
			include('form.php');
		}
		elseif((empty($city))){
			echo "Veuillez remplir le champ 'city'";
			include('form.php');
		}
		elseif((empty($state))){
			echo "Veuillez remplir le champ 'state'";
			include('form.php');
		}
		elseif((empty($code))){
			echo "Veuillez remplir le champ 'Code-Postal'";
			include('form.php');
		}
		elseif((empty($pays))){
			echo "Veuillez choisir votre pays";
			include('form.php');
		}
		elseif((empty($mounth))){
			echo "Veuillez donner votre mounth de naissance";
			include('form.php');
		}
		elseif((empty($day))){
			echo "Veuillez donner votre day de naissance";
			include('form.php');
		}
		elseif((empty($year))){
			echo "Veuillez donner votre year de naissance";
			include('form.php');
		}
		elseif($year > 1996){
			echo"Vous devriez avoir min. 16 ans";
			include('form.php');
		}
		elseif((empty($mail))){
			echo "Veuillez écrire votre adress mail";
			include('form.php');
		}
		//email ne contient pas @ ou un point
		elseif(filter_var($mail, FILTER_VALIDATE_EMAIL) === false) { 
			echo "L'adress email n'est pas valide" ;
			include('form.php');
			}
		elseif((empty($password))){
			echo "Veuillez écrire un mot de passe";
			include('form.php');
		}
		elseif((empty($cpassword))){
			echo "Veuillez confirmer votre mot de passe";
			include('form.php');
		}
		elseif($password!= $cpassword){
			echo "Les mot de passes ne se corespondent pas";
			include('form.php');
		}
		elseif($password < 4 && $cpassword < 4){
			echo "Votre mot de passe est trop petit";
			include('form.php');
		}
		else{
		header('Location: header.php');
				exit();   
			}
?> 
		
		