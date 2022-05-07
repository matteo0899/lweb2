<?xml version ="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm11-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: https://localhost/compito2/login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pagina 2</title>
		<link rel="stylesheet" href="css/external-style-sheet.css" type="text/css">
		
	</head>
		
	<body>
	    <div class="topbar">
		<img src="img/logo_lweb.png">		
			<form action="pagina5.php">
				<button type="submit">DTD</button>
				</form>
			<form action="pagina4.php">
				<button type="submit">MARK-UP LANGUAGE</button>
				</form>
			<form action="pagina3.php">
				<button type="submit">WELLFORMED</button>
				</form>
			<form action="pagina1.php">
				<button type="submit">BLOCKLEVEL &amp; INLINE</button>
				</form>
			<form action="index.php">
				<button type="submit">HOME</button>
				</form>
		</div>
	
		<div class="titolo">
			<h1>Cosa si intende per <strong>DOCUMENTO VALIDO</strong>?</h1>
		</div>
		<p >Frequentemente si sente parlare nella realizzazione di pagine web e documenti xhtml
			di <strong>VALIDIT&Agrave;</strong>.</p>
		
		<p class="special"> Ma spesso non appare ben chiaro cosa si intende!</p>
		
		<p >Partiamo da una definizione: <br />un documento si dice <strong>VALIDO</strong> <br />
			se rispetta la grammatica di riferimento, cio&eacute;, nel caso di documenti xhtml,<br />
			rispettare la dtd specificata in testa al documento.</p>
		
		<p>Rispettare la grammatica vuol dire:</p>
		
		<ul style="margin-left:25%;">
			<li>Usare gli elementi consentiti dalla grammatica di riferimento.</li>
			<li>Rispettare la struttura degli elementi.</li>
		</ul>
		
		<p class="special">Sorge quindi immediatamente una domanda:</p>
		
		<p class="special">Come verifico se un documento xhtml &egrave; valido?</p>
		<p >Una soluzione altrettanto immediata &egrave; data dal seguente link<br />
		<a href="https://validator.w3.org/">W3C VALIDATOR</a> in cui si pu&ograve;<br />
		caricare un documento e valutarne eventuali errori.
		</p>
	</body>

	
</html>