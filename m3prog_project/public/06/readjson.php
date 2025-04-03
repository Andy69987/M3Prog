<?php

$steden = ["amsterdam", "rotterdam", "utrecht"];
$stedenJson = json_encode($steden);

$stedenArray = json_decode($stedenJson);
print_r($stedenArray);


$json = '{
  "studenten": [
    {
      "name": "mario",
      "gemiddeldCijfer": 7.5
    },
    {
      "name": "wario",
      "gemiddeldCijfer": 4.5
    }
  ]
}';


$dataObject = json_decode($json);
print_r($dataObject);

echo "\nNaam eerste student: " . $dataObject->studenten[0]->name;

echo "\nGemiddeld cijfer van Wario: " . $dataObject->studenten[1]->gemiddeldCijfer;
