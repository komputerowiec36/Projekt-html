<?php
$pli = fopen("dane1.txt","r");
$dane = fread($pli, filesize("dane1.txt"));
fclose ($pli);
//echo $dane echo"<BR>"
$ndane = $dane + 1;
 //echo $ndane; echo"<BR>";
$spli = fopen("dane1.txt","w");
fwrite($spli,$ndane);
fclose ($spli);
echo "Witaj ",$ndane," uczestniku szkolenia";echo"<BR>";
 ?>
