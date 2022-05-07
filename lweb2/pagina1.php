<?xml version ="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: https://localhost/compito2/login.php');
?>	
	<head>
		<title>Pagina 1</title>
		<link rel="stylesheet" href="css/external-style-sheet.css" type="text/css"/>

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
			<form action="pagina3.php">
				<button type="submit">WELLFORMED</button>
				</form>
			<form action="index.php">
				<button type="submit">HOME</button>
				</form>
			
		</div>
		
		<div class="titolo">
			<h1>Differenza tra elementi <strong>BLOCKLEVEL</strong> e <strong>INLINE</strong></h1>
		</div>
		
		<p>
			In questo documento andremo ad individuare la differenza tra questi due tipi di elementi.<br />
			Cliccando su ciascun tag sarete indirizzati alla pagina ufficiale del W3C <br /> contenente tutte le specifiche ad esso relative.
		</p>
		
		<p class="special">Facciamo prima qualche esempio!</p>
		<p>
		Esempi di elementi <strong>BLOCKLEVEL</strong> sono:
		</p>
<!--utilizziamo una definition list ovvero una lista in cui per ogni termine indichiamo la relativa descrizione-->
		<dl>
			<dt>
				<a href="https://www.w3schools.com/tags/tag_table.asp">&lt;table&gt;</a>
			</dt>
			<br />
			<dd>tabella: i suoi elementi "figli" si comportano come elementi di blocco.<br />
				Può contenere altre tabelle.</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_p.asp">&lt;p&gt;</a>
			</dt>
			<br />
			<dd>paragrafo: non dovrebbe contenere altri elementi a livello di blocco,<br />
				ma può contenerne altri a livello di lista.</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_div.asp">&lt;div&gt;</a>
			</dt>
			<br />
			<dd>&Egrave; un blocco contenitore (div &grave; abbreviazione di "DIVisore").</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_pre.asp">&lt;pre&gt;</a>
			</dt>
			<br />
			<dd>testo preformattato che viene reindirizzato con gli spazi e le interruzioni di riga.</dd>
			<br />
		</dl>		
		
		<p>
		Esempi di elementi  <strong>INLINE</strong> sono:
		</p>
		<dl>
			<dt>
				<a href="https://www.w3schools.com/tags/tag_a.asp">&lt;a&gt;</a>
			</dt>
			<br />
			<dd>denota testo ancora</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_br.asp">&lt;br&gt;</a>
			</dt>
			<br />
			<dd>denota un a capo</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_strong.asp">&lt;strong&gt;</a>
			</dt>
			<br />
			<dd>denota testo importante</dd>
			<br />
			<dt>
				<a href="https://www.w3schools.com/tags/tag_em.asp">&lt;em&gt;</a>
			</dt>
			<br />
			<dd>denota testo da enfatizzare</dd>
			<br />
		</dl>
		
		<p>
		Molti altri esempi sono individuati nel seguente link:
		<a href="https://paitadesign.com/blog/html-capire-differenza-tra-elementi-block-e-inline/">Come capire la differenza tra elementi inlevel e blocklevel</a>
		<br />Da cui si &egrave; attinto per la realizzazione di questa pagina.
		</p>
		<p>Dagli esempi si nota immediatamente la differenza fondamentate tra questi due tipi di elementi...</p>
		<ul>
			<li>Un elemento <strong>INLINE</strong> viene visualizzato con continuit&aacute; rispetto al testo che lo circonda.</li>
			<li>Un elemento <strong>BLOCKLEVEL</strong> viene per default visualizzato nettamente separato dagli altri. <br />
										in quanto costituisce un blocco a s&eacute;.</li>
		</ul>
		
	</body>

	
</html>