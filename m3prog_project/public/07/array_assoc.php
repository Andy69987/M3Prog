<?php
$weer = [
    "maandag" => 11.1,
    "dinsdag" => 9.4,
    "woensdag" => 8.2,
    "donderdag" => 5.8,
    "vrijdag" => 5.0,
    "zaterdag" => 4.1,
    "zondag" => -3.5
];

echo "<table border='1'>";
echo "<tr><th>Dag</th><th>Temperatuur (°C)</th></tr>";
foreach($weer as $dag => $temperatuur) {
    echo "<tr><td>$dag</td><td>$temperatuur °C</td></tr>";
}
echo "</table>";

echo "<br>";

$vandaag = "maandag";
echo "Vandaag is het $weer[$vandaag] GRADEN graden. <br>";

$dagen = array_keys($weer);
for ($i = 0; $i < 5; $i++) {
    echo "Vandaag {$dagen[$i]} is het {$weer[$dagen[$i]]} graden. <br>";
}
?>
