<?php
class Lunch {
    public $naam;
    public $prijs;
    public $vega;
}

$item1 = new Lunch();
$item1->naam = "Broodje kaas";
$item1->prijs = 3.50;
$item1->vega = true;

$item2 = new Lunch();
$item2->naam = "Broodje ham";
$item2->prijs = 4.00;
$item2->vega = false;

echo $item1->naam . "<br>";
echo $item1->prijs . "<br>";
echo ($item1->vega ? "Vega" : "Niet vega") . "<br><br>";

echo $item2->naam . "<br>";
echo $item2->prijs . "<br>";
echo ($item2->vega ? "Vega" : "Niet vega") . "<br><br>";

$menu = [$item1, $item2];

$json = json_encode($menu);
echo $json . "<br><br>";

foreach ($menu as $item) {
    echo "<div>";
    echo "<h2>" . $item->naam . "</h2>";
    echo "<p>Prijs: €" . $item->prijs . "</p>";
    echo "<p>" . ($item->vega ? "Vegetarisch" : "Niet vegetarisch") . "</p>";
    echo "</div><br>";
}
