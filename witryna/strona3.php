<meta http-equiv="content-type" content="text/html; charset=utf-8">
<form action="strona1.html" method = "POST">
<input type = "Submit" name="submit" Value = "Wyloguj" />
<body bgcolor="lightblue">	
</form>
<?php
$dane1 = mysql_escape_string($_REQUEST['login']);
$dane = mysql_escape_string($_REQUEST['haslo']);
$con = mysql_connect('127.0.0.1:3306', "{$dane1}", "{$dane}" );
if (!$con) {
 die('błąd połączenia z bazą danych...');
}
mysql_select_db('pz79318');
$a = $_POST['kolumna'];
$b = mysql_real_escape_string($_REQUEST['nazwa']);
$zapytanie = "SELECT * FROM Formularz WHERE {$a} ='{$b}';";
$wskaznik=mysql_query($zapytanie, $con);
if (!$wskaznik){
$zapytanie = "SELECT * FROM Formularz;";
$wskaznik=mysql_query($zapytanie, $con);
}
if(mysql_num_rows($wskaznik) > 0) { 
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
    while($r = mysql_fetch_assoc($wskaznik)) { 
		echo "<td>".$r['Id']."</td>"; 
        echo "<td>".$r['Imie']."</td>"; 
        echo "<td>".$r['Nazwisko']."</td>"; 
        echo "<td>".$r['Pseudonim']."</td>"; 
        echo "<td>".$r['Wiek']."</td>";
        echo "<td>".$r['Stan']."</td>";
        echo "<td>".$r['Miasto']."</td>";   
        echo "<td> 
       <a href=\"strona4.php?a=del&amp;Id={$r['Id']}\">Usuń</a> 
       </td>";
        echo "<td>
       <a href=\"strona5.php?a=edit&amp;Id={$r['Id']}\">Edytuj</a> 
       </td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} 
?>
</body>

