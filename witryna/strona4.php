<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<body bgcolor="lightblue">	
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysql_connect('127.0.0.1:3306', "pz79318", "Weefoh6ie7" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
mysql_select_db('pz79318');
$a = trim($_GET['a']); 
$id = trim($_GET['Id']); 
if($a == 'del') { 
 mysql_query("DELETE FROM Formularz WHERE Id ='$id'")
  or die('Błąd zapytania: '.mysql_error()); 
     echo 'Wpis został usunęty z bazy'; 
}
?>
</body>
