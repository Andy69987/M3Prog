<?php
header('Content-Type: application/json');

$json = '{"naam":"God of war","prijs":39.99,"voorraad":150,"beschrijving":"Actiegame met mythologie"}';

$game = json_decode($json);

echo $game->naam . "\n";
echo $game->prijs . "\n";
echo $game->voorraad . "\n";
echo $game->beschrijving . "\n";

$game->voorraad = 20;
$game->prijs = 29.99;
$game->jaar = 2022;

echo json_encode($game);
