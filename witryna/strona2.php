<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<body bgcolor="lightblue">
<?php

$dane1 = mysql_escape_string($_REQUEST['login']);
$dane = mysql_escape_string($_REQUEST['haslo']);
$con = mysql_connect('127.0.0.1:3306',"{$dane1}", "{$dane}" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
mysql_select_db('pz79318');
?>
<form action="strona3.php" method = "POST">
<center><tittle><font size="+3">Przeszukaj Tabelę:</font></tittle></center>
<fieldset>
Login: <input type = "text" name = "login" /><br /></><br/>
Hasło: <input type = "text" name = "haslo" /><br /> </><br/>
Nazwa kolumny: <input type = "text" name = "kolumna" /><br /></><br/>
Szukana nazwa lub liczba: <input type = "text" name = "nazwa" /><br /></><br/>
<input type = "Submit" name="submit" Value = "Wyślij" />
</body>
</fieldset>
