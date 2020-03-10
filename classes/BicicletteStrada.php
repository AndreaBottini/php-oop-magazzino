<?php
require_once __DIR__ ."/Biciclette.php";
require_once __DIR__ . '/../traits/MisuraCorona.php';

class BiciStrada extends Bicicletta 
{
    use MisuraCorona;
    public $materiale;
    public $rapporti;

    public function __construct($_marca, $_modello, $_colore, $_peso, $_prezzo, $_materiale, $_rapporti, $_corona) {
        $this->marca = $_marca;
        $this->modello = $_modello;
        $this->colore = $_colore;
        $this->peso = $_peso;
        $this->prezzo = $_prezzo;
        $this->materiale = $_materiale;
        $this->rapporti = $_rapporti;
        $this->corona = $_corona;
    }
}

$cannondale = new BiciStrada ('Cannondale', 'Bici da Strada', 'bianco/nera', 7, 2000, 'carbonio', 32, 10);
var_dump($cannondale);




?>