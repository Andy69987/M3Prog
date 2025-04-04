<?php
$trophiesPerGame = [
    "Demon's souls" => 11,
    "Mario wonder" => 10,
    "Rayman Origins" => 9
];

$trophiesDs = $trophiesPerGame["Demon's souls"];
echo $trophiesDs . "<br>";

$trophiesMw = $trophiesPerGame["Mario wonder"];
echo $trophiesMw . "<br>";

$trophiesRo = $trophiesPerGame["Rayman Origins"];
echo $trophiesRo . "<br>";

$tetris = $trophiesPerGame["Tetris"] ?? "Key bestaat niet";
echo $tetris . "<br>";
?>
