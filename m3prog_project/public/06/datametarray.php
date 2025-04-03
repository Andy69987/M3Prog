<?php
header('Content-Type: application/json');

$student1 = [
    "name" => "mario",
    "gemiddeldCijfer" => 7.5,
    "klas" => "4A"
];

$student2 = [
    "name" => "wario",
    "gemiddeldCijfer" => 4.5,
    "klas" => "4B"
];

$student3 = [
    "name" => "bowser",
    "gemiddeldCijfer" => 6.0,
    "klas" => "4C"
];

$student4 = [
    "name" => "toad",
    "gemiddeldCijfer" => 8.2,
    "klas" => "4A"
];

$dataObject = [
    "studenten" => [$student1, $student2, $student3, $student4]
];

$jsonString = json_encode($dataObject);

echo $jsonString;
