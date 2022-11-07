<?php
echo "Witaj uczestniku szkolenia"; echo"<BR>";
$pli = fopen("dane1.txt","r");
$dane = fread($pli, filesize("dane1.txt"));
fclose ($pli);
//echo $dane echo"<BR>"
$ndane = $dane + 1;
 //echo $ndane; echo"<BR>";
 $spli = fopen("dane1.txt","w");
 fwrite($pli,$ndane);
 fclose ($spli);
 echo $ndane ;
 ?>
