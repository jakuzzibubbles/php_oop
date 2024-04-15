<?php

include_once 'flugobjekte.php';

class Ufo extends Flugobjekt {

// eigenschaften
    public $anzahlMenschen = 10000;

// methoden
public function kidnapping(){
    $this->anzahlMenschen = $this->anzahlMenschen -1;
    echo "Es wurde ein Mensch gekidnappt " .$this->anzahlMenschen;
  }
}

$ufo = new Ufo();
$ufo->kidnapping();
