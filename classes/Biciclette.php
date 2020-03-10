<?php
//1.Creo la classe bicicletta
 class Bicicletta {
     public $marca;
     public $modello;
     public $prezzo;
     public $misura;
     public $colore;
     public $peso;

    //3. creo la public function per assegnare i valori di default.
     public function __construct($_marca, $_modello, $_colore, $_peso, $_prezzo)
     { if(!empty($marca)){
         die('Non hai inserito la marca della bicicletta');
     }
         $this->marca = $_marca;
         $this->modello = $_modello;
         $this->colore = $_colore;
         $this->peso = $_peso;
         $this->prezzo = $_prezzo;
     }

     public function infoBici(){
         return [
             $this->marca,
             $this->modello,
             $this->colore,
             $this->prezzo,
             $this->peso,
         ];
     }













 }

//2. Creo istanze e attributi per new Biciletta
 $trek = new Bicicletta('Trek', 'Mountain Bike', 'verde', '10', '400');
//  $trek->marca = 'Trek';
//  $trek->modello = 'Mountain Bike';
//  $trek->prezzo = '400';
//  $trek->misura = '29"';
//  $trek->colore = 'verde';
//  $trek->peso = '10';
//  var_dump($trek);

 $atala = new Bicicletta('Atala', 'bici da città', 'rosso', '12', '299' );
//  $atala->marca = 'Atala';
//  $atala->modello = 'bici da città';
//  $atala->prezzo = '299';
//  $atala->misura = '26"';
//  $atala->colore = 'rosso';
//  $atala->peso = '12';
//  var_dump($atala);



?>