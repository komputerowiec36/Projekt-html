<?php
 $numer = $_POST['numer'];
 $sq = mysqli_connect("localhost", "root","","zadanie49");
 $res = mysqli_query($sq,"SELECT * FROM klasa1d WHERE numer=$numer");
if (!$res) {
 die('jest problem z odczytaniem rekordów...');
}
 if(mysqli_num_rows($res) > 0) { 
    echo "<center><table cellpadding=\"3\" border=1>"; 
	    echo "<tr><h3><center>klasa1d</center></h3></tr>";
	   echo"<tr>";
        echo "<td><center>numer</center></td>";  
        echo "<td><center>imie</center></td>"; 
        echo "<td><center>nazw</center></td>"; 
        echo "<td><center>ocena1</center></td>"; 		
        echo "<td><center>ocena2</center></td>";
		echo "<td><center>ocena3</center></td>";
		echo "<td><center>ocena4</center></td>";
		echo "<td><center>ocena5</center></td>";
		echo "<td><center>ocenasr</center></td>";
		echo "</tr>";
    while($r = mysqli_fetch_assoc($res)) { 
	    echo"<tr>";
		echo "<td><center>".$r['numer']."</center></td>"; 
        echo "<td><center>".$r['imie']."</center></td>"; 
		echo "<td><center>".$r['nazw']."</center></td>"; 
        echo "<td><center>".$r['ocena1']."</center></td>"; 
		echo "<td><center>".$r['ocena2']."</center></td>";
		echo "<td><center>".$r['ocena3']."</center></td>";
		echo "<td><center>".$r['ocena4']."</center></td>";
		echo "<td><center>".$r['ocena5']."</center></td>";
		echo "<td><center>".$r['ocenasr']."</center></td>";
		echo"</tr>";
 }
 echo "</table></center>"; 
} 
 mysqli_close($sq);

?>