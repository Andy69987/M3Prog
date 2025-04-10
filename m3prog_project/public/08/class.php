<?php
header('Content-Type: application/json');

$array = [
    "title" => "Blade Runner",
    "year" => 1982
];

$json = json_encode($array);
$object = json_decode($json);


echo $object->title . "\n";
echo $object->year;
