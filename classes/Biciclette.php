<?php
//1.Creo la classe bicicletta
 class Bicicletta {
     public $marca;
     public $modello;
     public $prezzo;
     public $misura;
     public $colore;
     public $peso;
 }
//2. Creo istanze e attributi per new Biciletta
 $trek = new Bicicletta();
 $trek->marca = 'Trek';
 $trek->modello = 'Mountain Bike';
 $trek->prezzo = '400';
 $trek->misura = '29"';
 $trek->colore = 'verde';
 $trek->peso = '10';
 var_dump($trek);

 $atala = new Bicicletta();
 $atala->marca = 'Atala';
 $atala->modello = 'bici da città';
 $atala->prezzo = '299';
 $atala->misura = '26"';
 $atala->colore = 'rosso';
 $atala->peso = '12';
 var_dump($atala);

?>