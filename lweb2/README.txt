Componenti del gruppo:
-Daniela Corbi
-Matteo Politi
Repository Git-Hub:
https://github.com/Daniela704/lweb2/tree/main/compito2
Descrizione svolgimento:
Per l'applicazione di ciò che è stato visto a lezione riguardo l'uso di PHP e MySQL abbiamo deciso di estendere il contributo 1, in modo 
da rendere il nostro sito web dotato di pagina di login e di un quiz che permetta ai nostri utenti di testare la conoscenza degli argomenti 
trattati nella prima parte di corso(XHTML e CSS).
Abbiamo realizzato una pagina di registrazione (register.php) che permetta all'utente di entrare a far parte della nostra "comunity".
Il sito web è infatti realizzato utilizzando il meccanismo delle sessioni, ed i contenuti sono perfento accedibili unicamente af utenti
loggati.
In register.php è stato effettuato anche un semplice controllo sull'email(che risulta valida solo se dotata di "@") e sulla eventuale già 
esistenza di quella data email nel database(in quel caso è necessario inserirne una nuova).
Se la registrazione è avvenuta correttamente si è indirizzati alla pagina di login, dove una volta trovata, tramite una query sql la 
corrispondenza di email e password dell'utente nel database, si inizializza la sessione( che perdurerà durante la navigazione dell'utente 
nel sito web, e si concludera il fase di logout).
In fase di Login vengono inoltre settati i paramentri della sessione(all'interno dell'array $_SESSION) e si viene indirizzati nella home.
Una volta giunti alla home una scritta di benvenuto accoglie l'utente specificando la data di ingresso al sito(che era stata memorizzata in fase
di login tramite l'istruzione ( $_SESSION['data'] = time() ).
Le pagine dalla 1 alla 5 sono rimaste invariate, tranne che per l'aggiungiunta del controllo di sessione.
E' stato inoltre inserito un quiz, al termine del quale una volta aver risposto a TUTTE le domande, si visualizza il punteggio e le risposte errate;
inoltre si ha la possibilità, tramite dei button, di effettuare nuovamente il quiz, di tornare alla home o di visionare le risposte.
