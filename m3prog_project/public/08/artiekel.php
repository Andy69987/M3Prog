<?php
header('Content-Type: application/json');

class Artiekel {
    public $titel;
    public $prijs;
    public $voorraad;

    function __construct($titel, $prijs, $voorraad) {
        $this->titel = $titel;
        $this->prijs = $prijs;
        $this->voorraad = $voorraad;
    }
}

$game = new Artiekel("Minecraft", 29.99, 100);

echo json_encode($game);
