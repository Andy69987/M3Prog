<?php
$getal = 123.45678;

$afgerond1 = ceil($getal);
echo "Het getal $getal naar boven afgerond is: $afgerond1<br>";

$afgerond2 = floor($getal);
echo "Het getal $getal naar beneden afgerond is: $afgerond2<br>";

$afgerond3 = round($getal, 2);
echo "Het getal $getal afgerond op twee decimalen is: $afgerond3<br>";
?>
