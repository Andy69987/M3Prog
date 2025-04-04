<?php
header("Content-Type: application/json");

$verbruik = [
    "ps5" => 19,
    "wasmachine" => 30,
    "telefoon" => 1,
    "nes" => 2,
    "gameboy" => 1
];

$json = json_encode($verbruik);
echo $json;
?>
