<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparatenlijst</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .apparaat { margin-bottom: 10px; }
        .totaal { font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>

<?php
$apparaten = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];

$totaal = 0;

foreach ($apparaten as $apparaat => $verbruik) {
    echo "<div class='apparaat'>$apparaat verbruikt $verbruik KwH</div>";
}

foreach ($apparaten as $verbruik) {
    $totaal += $verbruik;
}

echo "<div class='totaal'>Totaal verbruik: $totaal KwH</div>";
?>

</body>
</html>
