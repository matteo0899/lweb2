<?xml version = "1.0" encoding="ISO-8859-1"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pagina 4</title>	
		<link rel="stylesheet" href="css/external-style-sheet.css" type="text/css" />
	</head>

	<body>
	    <div class="topbar">
		<img src="img/logo_lweb.png" alt="logo" />		
			<form action="pagina5.php">
				<button type="submit">DTD</button>
				</form>
			<form action="pagina3.php">
				<button type="submit">WELLFORMED</button>
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
			<h1>Linguaggi di <strong>MARKUP</strong></h1>
		</div>
		
		<p>
			Un linguaggio di markup &egrave; un linguaggio che permette di scrivere documenti testuali, <br />
			<em>marcando</em> ciascuna data parte come elemento di un certo tipo, in modo che acquisisca un certo significato. <br />
			Per significato si intende il <em>ruolo</em> che ha l'elemento nel documento,<br /> in base al quale il software di analisi del
			documento(es. browser) opera(es. visualizza).<br />
			Ci&oacute; che conferisce significato al linguaggio &egrave; l'etichetta (tag &lt;&gt;>)
		</p>
		
		<p>I linguaggi di markup sono moltissimi, per citarne alcuni...</p>
			<ul style="margin-left:45%;">
				<li><abbr title="Mathematical Markup Language">MathML</abbr></li>
				<li><abbr title="Predictive Model Markup Language">PMML</abbr></li>
				<li><abbr title="eXtensible Hypertext Markup Language">XHTML</abbr></li>
			</ul>
			<p class="special">ML sta appunto per Markup Language.</p>
		
		<p>
			Nel nostro caso prenderemo in considerazione XHTML.<br />
			Riportiamo di seguito un link che spiega l'utilit&aacute; dei tag in XHTML e le varie tipologie esistenti.<br /><br />
			<a href="https://www.html.it/pag/16030/elementi-e-tag-in-html/">Elementi e tag in HTML</a>
		</p>
		
		
	</body>

	
</html>