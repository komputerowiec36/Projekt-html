<meta http-equiv="content-type" content="text/html; charset=utf-8">
<body>
<form action="strona2.php" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
</form>
<?php
$con = mysqli_connect('localhost', "root", "serwer12345*", "tabele" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
$a = $_POST['kolumna'];
$b = $_REQUEST['nazwa'];
$zapytanie = "SELECT * FROM Formularz WHERE {$a} ='{$b}';";
$wskaznik=mysqli_query($con, $zapytanie);
if (!$wskaznik){
$zapytanie = "SELECT * FROM Formularz;";
$wskaznik=mysqli_query($con, $zapytanie);
}
if(mysqli_num_rows($wskaznik) > 0) { 
    echo "<table cellpadding=\"2\" border=1>"; 
      echo "<tr>";
        echo "<td>Id</td>";  
        echo "<td>Imie</td>"; 
        echo "<td>Nazwisko</td>"; 
        echo "<td>Pseudonim</td>"; 
        echo "<td>Wiek</td>";
        echo "<td>Stan</td>";
        echo "<td>Miasto</td>";  
        echo "</tr>";
    while($r = mysqli_fetch_assoc($wskaznik)) { 
		echo "<td>".$r['id']."</td>"; 
        echo "<td>".$r['imie']."</td>"; 
        echo "<td>".$r['nazwisko']."</td>"; 
        echo "<td>".$r['pseudonim']."</td>"; 
        echo "<td>".$r['wiek']."</td>";
        echo "<td>".$r['stan']."</td>";
        echo "<td>".$r['miasto']."</td>";   
        echo "</tr>";
    } 
    echo "</table>"; 	
}
?>
<form action="strona5.php" method = "POST">
<input type="hidden" name="a" value="<?php echo $a; ?>" /> 
<input type="hidden" name="b" value="<?php echo $b; ?>" /> 
<input type = "Submit" name="submit" Value = "Edytuj" />
</form>
<form action="strona4.php" method = "POST">
<input type="hidden" name="a" value="<?php echo $a; ?>" /> 
<input type="hidden" name="b" value="<?php echo $b; ?>" /> 
<input type = "Submit" name="submit" Value = "Usuń" />
</form>
</body>