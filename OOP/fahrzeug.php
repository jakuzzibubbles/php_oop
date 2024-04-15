//anzahl der räder
//farbe
<?php

class Fahrzeug {
    public $raeder;
    public $farbe;
    public $km;

    public function go(){
        $this->km = $this->km + 1;
        echo "Der aktuelle km Stand ist: " .$this->km."\n";
    }
}

$fahrzeug = new Fahrzeug();
$fahrzeug->farbe ="blau";
$fahrzeug->go();
$fahrzeug->go();
$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();$fahrzeug->go();