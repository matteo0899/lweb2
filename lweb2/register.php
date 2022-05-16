<?xml version ="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>REGISTRATI</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>

   <form method="post">
    <div class="form">
       <h1>REGISTRATI</h1>
	     <div class="input">
			   <input type="text" class="inputT" name="nome" placeholder="Nome"/><br />
			   <input type="text" class="inputT" name="cognome" placeholder="Cognome"/><br />
			   <input type="text" class="inputT" name="email" placeholder="Email"/><br />
			   <input type="password" class="inputT" name="password" placeholder="Password"/><br />
			   <input type="submit" name="invia" class="invio" value="REGISTRATI" />
	   	 </div>
	</div>
	</form>
</html>

<?php

	include("connection.php");
		
		if(isset($_POST['nome']) && isset($_POST['cognome']) && isset($_POST['email']) && isset($_POST['password'])){
		    $nome = $_POST['nome'];
			$cognome = $_POST['cognome'];
			$email = $_POST['email'];	  	 		
			$password = $_POST['password'];
			//include("connection.php");
			
			if($conn){ // se la connessione avviene correttamente
				if(isset($_POST['invia'])){
				
					if(!empty($nome) && !empty($cognome) && !empty($email) && !empty($password)){
				
						//controllo la validità dell'email tramite la presenza in essa della "@"
						if(strpos($email,'@')){
							
							$cerca_email="SELECT id FROM utente WHERE email='$email'";
							$result=mysqli_query($conn, $cerca_email);
							$num=mysqli_num_rows($result);
							//controllo se l'email sia già presente nel database e nel caso invito l'utente ad usarne un'altra
							if($num==0){
								
								$stringa = "INSERT INTO utente (nome,cognome,email,password) VALUES ('$nome','$cognome','$email','$password')";
								$ris = mysqli_query($conn,$stringa);   	
								header("Location: login.php");
							
							}else{
								echo '<html><p style="color:#fff;text-align:center;font-size:20px;">Questa mail &egrave gi&agrave stata utilizzata</p></html>';
							}		
						}else
							echo '<html><p style="color:#fff;text-align:center;font-size:20px;">Email non valida</p></html>';
					}else
						echo '<html><p style="color:#fff;text-align:center;font-size:20px;">Campi mancanti</p></html>'; 
					
				}	
				mysqli_close($conn);
			}else 
				echo 'Connessione fallita';
			
		}

?>



