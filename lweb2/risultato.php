<?xml version = "1.0" encoding="UTF-8"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>ESITO</title>
		<link rel="stylesheet" href="css/risultato.css" type="text/css" />
	</head>
	<body>
	 <img src="img/logo_lweb.png" alt="logo pagina" class="logo" />
	 <br />
	</body>
</html>
<?php
  $count = 0;
  $risposteErrate="";
   if(isset($_POST['invio'])){
		if(!empty($_POST['domanda1']) && !empty($_POST['domanda2']) && !empty($_POST['domanda3']) && !empty($_POST['domanda4']) &&
			!empty($_POST['domanda5']) && !empty($_POST['domanda6']) && !empty($_POST['domanda7']) ){
			if($_POST['domanda1'] == "div")
				$count++;
			else{
				$risposteErrate="la prima Domanda";
			}
			if($_POST['domanda2'] == "inline")
			   $count++;
			else{
			   if($risposteErrate=="")
					$risposteErrate.="la seconda domanda";
			   else
					$risposteErrate.=", la seconda domanda";
			}
			if($_POST['domanda3'] == "w3cvalidator")
			   $count++;
			else{
				if($risposteErrate=="")
					$risposteErrate.="la terza domanda";
				else
					$risposteErrate.=", la terza domanda";
			}
			if($_POST['domanda4'] == "UML")
			   $count++;
			else{
				if($risposteErrate=="")
					$risposteErrate.="la quarta domanda";
				else
					$risposteErrate.=", la quarta domanda";
			}
			if($_POST['domanda5'] == "d51")
			   $count++;
			else{
				if($risposteErrate=="")
					$risposteErrate.="la quinta domanda";
				else
					$risposteErrate.=", la quinta domanda";
			}
			if($_POST['domanda6'] == "head")
			   $count++;
			else{
				if($risposteErrate=="")
					$risposteErrate.="sesta domanda";
				else
					$risposteErrate.=", la sesta domanda";
			}
			if($_POST['domanda7'] == "textcolor")
			   $count++;		   
			else{
				if($risposteErrate=="")
					$risposteErrate.="la settima domanda";
				else
					$risposteErrate.=", la settima domanda";
			}
			echo "<html><h1 style='text-align:center;'>Risposte giuste :  $count/7</h1></html>";
			if($risposteErrate!=""){
				echo"<html><br /><h3 style='text-align:center;' >Hai sbagliato $risposteErrate.</h3></html>";/*modificare lo style della scritta*/
			} 
			echo "
				<html><div>				
						<button type='submit' style='float:left;'><a href='quiz.php'>Torna al quiz</a></button>
						<button type='submit' style='margin-left:5%; margin-right:5%;'><a href='index.php'>Vai alla home</a></button>
						<button type='submit'style='float:right;'><a href='form-quiz-risposte.php'>Vedi le risposte</a></button>	
						</div>
				</html>";
			   	 		
		}else
			{
			echo "<h1>Si prega di rispondere a TUTTE le domande</h1>";
			}
		 
	}  
?>