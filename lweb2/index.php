<?xml version ="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm11-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: login.php');
 	else{
	 $email=$_SESSION['email'];
     $nomeUtente = "SELECT nome FROM utente
     WHERE email = '$email'";
	include("connection.php");
        if($result = mysqli_query($conn, $nomeUtente)) {
			//verifico che esista una riga in tabella con l'email passata
            $row = mysqli_fetch_array($result);
            if($row) {
                $nome = $row['nome'];
            }
        }
		mysqli_close($conn);
    }
	
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/index.css" type="text/css" />
		<p class="logout-link"><a href="logout.php">LOGOUT</a></p>
	</head>

	<body>
<!--modifica della scritta di accesso-->
		<h1 class="titolo-home">Benvenuto <?php echo "$nome"; ?></h1>
		
		<br />
		<div class="sidebar" style="width:22%">	
			<a href="pagina1.php">BLOCKLEVEL e INLINE</a>
			<a href="pagina2.php">DOCUMENTO VALIDO</a>
			<a href="pagina3.php">DOCUMENTO WELL-FORMED</a>
			<a href="pagina4.php">LINGUAGGIO DI MARK-UP</a>
			<a href="pagina5.php">DTD</a>		  
		</div>
		

		
		<div class="home" >
			<p>
			<br />
			Benvenuti sulla homepage di questa esercitazione.<br />
			In questa pagina andremo a descrivere alcune caratteristiche formali e strutturali di CSS e XHTML.<br />
			Nel men&ugrave; adiacente verrete indirizzati a una serie di pagine separate per argomento che vi permetteranno di capire i concetti di base di queste specifiche.<br />
			In ogni pagina troverete rispettivamente degli esempi che vi permetteranno di capire e fissare al meglio i concetti trattati.</p><br />
			<p>Hai voglia di testare le tue capacit&agrave;?<br /> Prova il nostro <a style="color:#fff;" href="quiz.php">QUIZ</a></p>
			<br />
			<p>Orario di accesso: <?php echo date('g:i a',$_SESSION['data']); ?></p>
		</div>

	</body>
	</html>
	