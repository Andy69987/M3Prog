<?php
$persoon = [
    "voornaam" => "Luigi",
    "achternaam" => "Mario",
    "leeftijd" => 19,
    "favoriet eten" => "pasta",
    "minst favoriet eten" => "paddenstoelen",
    "woonplaats" => "mushroom kingdom"
];

foreach($persoon as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

echo "<table border='1'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach($persoon as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>";
}
echo "</table>";
?>
