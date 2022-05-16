<?xml version ="1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtm11/DTD/xhtm11-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: login.php');
?> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pagina 3</title>
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
			<form action="pagina2.php">
				<button type="submit">DOCUMENTO VALIDO</button>
				</form>
			<form action="pagina1.php">
				<button type="submit">BLOCKLEVEL &amp; INLINE</button>
				</form>
			<form action="index.php">
				<button type="submit">HOME</button>
				</form>
		</div>
	
		<div class="titolo">
			<h1>Cosa si intende per <strong>DOCUMENTO BEN FORMATO</strong>?</h1>
		</div>
		
		<p > 
			Un documento si dice <strong>ben formato</strong> se &egrave; "scritto bene", ovvero se <br />
			(<cite>Wikipedia</cite>) <q>aderisce alle regole di sintassi specificate da XML 1.0</q>.
		</p>
		
		<p>Rispettare la sintassi vuol dire:</p>
		<ul>
			<li>Scrivere elementi e attributi in minuscolo.</li>
			<li>Disporre i contenuti con l'annidamento appropriato.</li>
			<li>C'&egrave; un elemento singolo <em>root</em> che contiene tutti gli altri elementi.</li>
			<li>I tag di inizio e fine cono case-sensitive, pertanto i tag di inizio e fine devono<br />
				essere disposti propriamente.</li>
			<li>Gli elementi vuoti come <em>&lt;hr&gt;</em> e <em>&lt;br&gt;</em> devono essere sempre terminati.</li>
			<li>Gli attributi sempre posti tra virgolette.</li>
		</ul>
		
		<p class="special">Il rispetto di queste regole &egrave; necessario in quanto il programma deve essere gestito dal web browser.	</p>
	</body>

	
</html>