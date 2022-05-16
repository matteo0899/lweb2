<?php
/*script per eliminare le tabelle dal database, introdotto per risolvere una problematica, poi risolta,
 nell'esecuzione dello script di installazione*/
include("connection.php");

	
$delete= mysqli_query($conn, "DROP TABLE utente");

if($delete !== FALSE)
{
   echo("Tabella cancellata");
}else{
   echo("Tabella NON cancellata");
}

?>