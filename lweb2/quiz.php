<?xml version = "1.0" encoding="UTF-8"?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php 
   session_start();
    if(!isset($_SESSION['permesso']))
	   header('Location: https://localhost/compito2/login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>QUIZ XHTML-CSS</title>
		<link rel="stylesheet" href="css/quiz.css" type="text/css" />
	</head>
	<body>
	  <img src="img/logo_lweb.png" alt="logo pagina" class="logo" />
	  <h1 class="titolo">Testa le tue conoscenze con il nostro quiz</h1>
	  <br />
	  <form action="risultato.php" method="post">
	  
		<p class="testodomande"><strong>Quale tra i seguenti elementi viene utilizzato come contenitore per altri elementi html?</strong></p>
		<input type="radio" name="domanda1" value="em" /><label>em</label><br />
		<input type="radio" name="domanda1" value="div" /><label>div</label><br />
		<input type="radio" name="domanda1" value="br" /><label>br</label><br />
		
		<p class="testodomande"><strong>L'elemento &lt;span&gt; e' block level oppure inline ?</strong></p>
		<input type="radio" name="domanda2" value="blocklevel" /><label>block-level</label><br />
		<input type="radio" name="domanda2" value="inline" /><label>inline</label><br /><br />

		<p class="testodomande"><strong>Indicare uno strumento per la validazione di documenti html</strong></p>
		<input type="text" placeholder="Scrivi qui" name="domanda3" /><br />

		<p class="testodomande"><strong>Quale tra i seguenti NON e' un linguaggio di markup?</strong></p>
		<input type="radio" name="domanda4" value="HTML" /><label>HTML</label><br />
		<input type="radio" name="domanda4" value="UML" /><label>UML</label><br />
		<input type="radio" name="domanda4" value="MathML" /><label>MathML</label><br />

		<p class="testodomande"><strong>A cosa serve la DTD ?</strong></p>
		<input type="radio" name="domanda5" value="d51" /><label>A definire le componenti ammesse nella costruzione di un documento XML.</label><br />
		<input type="radio" name="domanda5" value="d52" /><label>A definire lo stile di una pagina HTML</label><br />
		<input type="radio" name="domanda5" value="d53" /><label>Permette di costruire pagine web dinamiche</label><br />

		<p class="testodomande"><strong>In un documento HTML qual è il posto corretto per fare riferimento a un foglio di stile esterno?</strong></p>
		<input type="radio" name="domanda6" value="head" /><label>Nella sezione head</label><br />
		<input type="radio" name="domanda6" value="body" /><label>Nella sezione body</label><br />
		<input type="radio" name="domanda6" value="footer" /><label>Nella sezione footer</label><br />

		<p class="testodomande"><strong>Quale comando viene utilizzato per cambiare il colore di un elemento di testo?</strong></p>
		<input type="radio" name="domanda7" value="textcolor" /><label>text-color</label><br />
		<input type="radio" name="domanda7" value="fgcolor" /><label>fgcolor</label><br />
		<input type="radio" name="domanda7" value="fontcolor" /><label>font-color</label><br />
		<p>
		<br />
		<br />
		</p>
		
		<p><input type="submit" class="invio" name="invio" value="INVIO" />&emsp;<input type="reset" class="reset" value="CANCELLA" /></p>
	</form>
  </body>
  <footer><p style="text-align:center;"><a style='color:#fff;' href='index.php'>Torna alla home</a></p></footer>
</html>