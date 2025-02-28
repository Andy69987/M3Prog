<?php

$fahrenheit = 98.6;
$celsius = ($fahrenheit - 32) * 5 / 9;
echo "$fahrenheit graden Fahrenheit is gelijk aan $celsius graden Celsius.<br>";

$celsius = 37;
$fahrenheit = $celsius * 9 / 5 + 32;
echo "$celsius graden Celsius is gelijk aan $fahrenheit graden Fahrenheit.<br>";

$celsius = 25;
$kelvin = $celsius + 273.15;
echo "$celsius graden Celsius is gelijk aan $kelvin Kelvin.<br>";

$kelvin = 300;
$celsius = $kelvin - 273.15;
echo "$kelvin Kelvin is gelijk aan $celsius graden Celsius.<br>";
?>
