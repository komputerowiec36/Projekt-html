<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<body bgcolor="lightblue">	
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysql_connect('127.0.0.1:3306',"pz79318", "Weefoh6ie7" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
mysql_select_db('pz79318');
$a = mysql_real_escape_string($_REQUEST['id']);
$b = mysql_real_escape_string($_REQUEST['imie']);
$c = mysql_real_escape_string($_REQUEST['nazwisko']);
$d = mysql_real_escape_string($_REQUEST['pseudonim']);
$e = mysql_real_escape_string($_REQUEST['wiek']);
$f = mysql_real_escape_string($_REQUEST['stan']);
$g = mysql_real_escape_string($_REQUEST['miasto']);
mysql_query("Insert into Formularz values ('{$a}', '{$b}', '{$c}', '{$d}', '{$e}', '{$f}', '{$g}');")
or die('Błąd zapytania: '.mysql_error()); 
echo 'Wpis został dodany'; 
?>
</body>


