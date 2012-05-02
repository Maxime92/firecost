<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Profil client</title>
<link rel="stylesheet" type="text/css" href="design.css" media="all">
</head>
<body>
	

       <?php include('header_dec.php');?> 		
   
	<div id="form_container"></br></br>						
		
		<fieldset>
			<legend>Compte</legend> 
			 <form id="profil" method="post" action="">
		<h5><center><TABLE> 
		<TR>
			<TD>Pseudo: [session_start]</br></br>
		</TR> 
		</form>
		<br><br>
		<form id="profil" method="post" action="" onSubmit="">			
		<TR>
			<TD>Mot de passe: 
		</br><input type="password" name="password" />
		<input type="submit" name="action" value="Modifier"/></TD>
		</TR>
					
		</form>
		<br><br>
		<form id="profil" method="post" action="" onSubmit="">
					<TR>
						<TD>E-mail: 
						</br><input type="text" id="email" name="email" onChange=""/>
						<input type="submit" name="action" value="Modifier"/> </td>
					</TR>
					</form>
		<form id="profil" method="post" action="" >
					<TR>
						<TD>Supprimer votre compte  : 
						<input type="submit" name="Submit" value="Supprimer"></td>
					</TR>
					</form>			   
          <p>
           <label for="precisions">Vos informations personnel :</label></p>
           <textarea name="precisions" id="precisions" cols="40" rows="4"></textarea>
       </p>
		</fieldset>
				</TABLE></center></h5></div>

	</body>
</html>