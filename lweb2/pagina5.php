<?xml version = "1.0" encoding="ISO-8859-1"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: https://localhost/compito2/login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Pagina 5</title>
		<link rel="stylesheet" href="css/external-style-sheet.css" type="text/css" />
	</head>

	<body>
	    <div class="topbar">
		<img src="img/logo_lweb.png" alt="logo" />		
			<form action="pagina4.php">
				<button type="submit">MARK-UP LANGUAGE</button>
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
			<form action="home.php">
				<button type="submit">HOME</button>
				</form>
		</div>
		
		<div class="titolo">
			<h1>DTD in XHTML</h1>
		</div>
		
		<p>Un DTD si riferisce ad un formato di documento XML e rappresenta gli elementi consentiti dalla pagina web. </p>
	
		<p>
			È una direttiva che comunica al browser web la versione HTML e lo standard in cui è scritta la pagina corrente; <br />
			questo aiuta diversi browser web ad analizzare correttamente la pagina web.
		</p>
		
		<p>Tecnicamente la dichiarazione Doctype non appartiene alla categoria di <em>tag</em> &egrave; solo una direttiva per il browser web.<br /></p>
		
		<p class="special">La dichiarazione &lt;!DOCTYPE&gt; non &egrave; case sensitive ci&oacute; significa che oltre a quella appena scritta,<br /> anche le seguenti direttive sono valide:</p>
			
		<ul style="margin-left:25%;">
			<li>&lt;!doctype&gt;</li>
			<li>&lt;!DoctYpe&gt;</li>
		</ul>
		
		<p class="special">Essa dovrebbe trovarsi nella prima riga del documento HTML e purtroppo la sua scrittura<br /> varia sulla base della versione di HTML che stiamo utilizzando.</p>		
		
		<p>
			Mentre nell'ultima versione di HTML (HTML 5) abbiamo un unico semplice modo<br /> 
			di rendere la sovrastante dichiarazione(&lt;!DOCTYPE html&gt;)...
		</p>
		<p class="special">Nel caso della versione 4.1 abbiamo 3 possibilit&aacute;: </p>
		
		<ul style="margin-left:25%;">
			<li>Strict</li>
			<li>Transitional</li>
			<li>Frameset</li>
		</ul>
		
		<div class="p5">
			<p>
			Il <strong>DTD Strict</strong> &egrave; il pi&ugrave; efficiente,<br /> in quanto fornisce un linguaggio XHTML minimo per la creazione di pagine Web. <br />
			Si potrebbe quindi pensare che questo sia limitante e privo di utilit&agrave;... <br /> 
			In realt&agrave;, come accennato in precedenza, &egrave; il DTD più efficiente e consente una pi&ugrave; rapida convalida dei documenti XHTML. <br />
			L'idea alla base del suo utilizzo &egrave; quella di utilizzare fogli di stile per la visualizzazione piuttosto che per gli elementi di presentazione.<br />
			Pertanto, il suo uso mira a separare il codice di presentazione dal contenuto.
			</p>
			<br />
		</div>	
		<p> </p>
		
		<div class="p5">
			<p>
			Il <strong>DTD Transitional</strong> aggiunge più funzionalit&agrave; a un documento XHTML.<br />
			Il supporto per più funzionalit&agrave; aumenta il processo di convalida quando viene visualizzato un documento XHTML.<br />
			Poiché una DTD Transitional fornisce supporto per elementi di presentazione, pu&ograve; essere utilizzata per convertire documenti HTML in XHTML. <br />
			Quest'ultimo non include per&ograve; il supporto per i frame (che consente di utilizzare una singola finestra del browser per visualizzare pi&ugrave; pagine Web).
			</p>
			<br />
		</div>
		<p> </p>
		
		<div class="p5">
			<p>
			Il <strong>DTD Frameset</strong>, &egrave; un DTD XHTML completo.
			Questo DTD ha il supporto per ci&ograve; che offre un DTD di transizione oltre al supporto per i frame.<br />
			Poich&eacute; &egrave; il più complesso, &egrave; il pi&ugrave; lento dei tre quando si tratta di convalidare documenti XHTML.
			</p>
			<br />
		</div>
		<p> </p>
		
	</body>

	
</html>