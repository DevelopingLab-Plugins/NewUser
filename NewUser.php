<?php

echo "<b>Scritto da t.me/Matxk</b>";

																		t.me/DevelopingLab;

$table = 'NOMETABELLA'; //Inserire il nome della tabella che contiene le informazioni sugli utenti del bot
$u = mysql_query("SELECT * FROM $table WHERE user_id = $userID");
$admins = [ID, ID]; //Inserire gli ID delle persone che riceveranno la "notifica"

//Comandi Start e messaggi da mandare agli admin quando un nuovo utente si iscrive
if($msg == '/start' and $u['page']==null) {
	mysql_query("UPDATE $table SET page = ' ' WHERE user_id = $userID");
	sm($chatID, "<i>Bot avviato con successo!</i>");
 foreach($admins as $ad) {
  	if($username == null and $cognome == null) {
     sm($ad, "<b>Nuovo utente iscritto al Bot!</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i><b>Non settato</b>");
   }elseif($cognome == null) {
     sm($ad, "<b>Nuovo utente iscritto al Bot!</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><b>Non settato</b>\n<i>Username: </i>@$username");
   }elseif($username == null) {
     sm($ad, "<b>Nuovo utente iscritto al Bot!</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><code>$cognome</code>\n<i>Username: </i><b>Non settato</b>");
   }elseif($username != null and $cognome != null) {
     sm($ad, " 
<b>Nuovo utente iscritto al Bot!</b>\n\n<i>ID: </i><code>$userID</code>\n<i>Nome: </i><code>$nome</code>\n<i>Cognome: </i><code>$cognome</code>\n<i>Username: </i>@$username");
  }
 }
}elseif($msg == '/start' and $u['page']!=null) {
	mysql_query("UPDATE $table SET page = ' ' WHERE user_id = $userID");
	sm($chatID, "<i>Bot avviato con successo!</i>");
}