<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<body bgcolor="lightblue">	
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysqli_connect('localhost', "root", "serwer12345*", "tabele" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
$a = $_POST['a'];
$b = $_POST['b'];
if(!empty($a)) { 
 mysqli_query($con, "DELETE FROM Formularz WHERE {$a} ='{$b}';")
  or die('Błąd zapytania: '.mysqli_error()); 
     echo 'Wpis został usunęty z bazy'; 
}
?>
</body>
