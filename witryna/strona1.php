<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body bgcolor="lightblue">	
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysqli_connect('localhost',"root", "serwer12345*","tabele");
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
$a = $_REQUEST['id'];
$b = $_REQUEST['imie'];
$c = $_REQUEST['nazwisko'];
$d = $_REQUEST['pseudonim'];
$e = $_REQUEST['wiek'];
$f = $_REQUEST['stan'];
$g = $_REQUEST['miasto'];
mysqli_query($con,"Insert into Formularz values ('{$a}', '{$b}', '{$c}', '{$d}', '{$e}', '{$f}', '{$g}');")
or die('Błąd zapytania: '.mysqli_error()); 
echo 'Wpis został dodany'; 
?>
</body>


