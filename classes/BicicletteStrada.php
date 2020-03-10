<?php
require_once __DIR__ ."/Biciclette.php";

class BiciStrada extends Bicicletta 
{
    public $materiale;
    public $rapporti;

    public function __construct($_marca, $_modello, $_colore, $_peso, $_prezzo, $_materiale, $_rapporti) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->colore = $_colore;
        $this->peso = $_peso;
        $this->prezzo = $_prezzo;
        $this->materiale = $_materiale;
        $this->rapporti = $_rapporti;
    }
}

$cannondale = new BiciStrada ('Cannondale', 'Bici da Strada', 'bianco/nera', 7, 2000, 'carbonio', 32);
// var_dump($cannondale);




?>