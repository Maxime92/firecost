<?php //session_start();
	include("connect_bdd.php");
	
	$sql = "SELECT nom_article,date_debut,date_fin,nb_article,prix,nb_decr,image FROM ventes";
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
//	$data = mysql_fetch_array($req); 
	
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Profil client</title>
	  <link rel="stylesheet" type="text/css" href="../Publique/Css/style1.css" media="all">
    </head>
  <body>
		
		   
				<div id= "box">
                    <center><h1>Meilleurs ventes</h1>
                    <p id="img"><img src="images/galaxy.jpg" alt="galaxy" /></p>
                    <p><h1>Samsung Galaxy</h1></p>
					<p>Smartphone sous Android</p>
					<p>Ecran TFT tactile de 8,9 cm</p>
					<p>Appareil photo 5 megapixels Flash LED</p>
					<p>Memoire 150 Mo / 3G+, WiFi, GPS</p>
					<h2><p id="prix">A partir de 9,90 € </p></h2></center>
					
                </div>
                </br></br>
	<div id="milieu">		
				<?php 
				while($data = mysql_fetch_array($req))
				{
				echo"<section>";
				echo"<aside>";
                
					echo"<h1>Nouveaux ventes</h1>";
					//echo'<p id="img"><img src='.$data['image'].' alt='' width="40%" height="50%" />';
					echo '<p>Description : "'.$data['nom_article'].'" </p>';
					echo '<p>Date de la vente : "'.$data['date_debut'].'" </p>';
					echo '<p>Fin de la vente : "'.$data['date_fin'].'" </p>';
					echo '<p>Nombre d article : "'.$data['nb_article'].'" </p>';
					echo '<p>Nombre decr : "'.$data['nb_decr'].'" </p>';
					echo' <h2><p id="prix">A partir de '.$data['prix'].'€ </p></h2>';
				    echo"</aside>";
		
				   echo"</section>";
				   //echo"</br></br>";
				}
				mysql_free_result ($req);  
				mysql_close ();  
			?>
	</div>		
	  
           
                <div id="pied">
					<p id="sep"><img src="images/bottom.png" alt="sp"  width="100%" height="1%"/></p>
                    <p><a href="#">Qui sommes nous |</a>
                    <a href="#">Mentions legales  |</a>
					<a href="#">Contacte  |</a>
					<a href="#">Entreprises</a></p>
                </div>
          
       
	   
   </body>
</html>