<?php

class Flugobjekt {
    public $fluegel;
    public $farbe;
    public $flugstunden;

    public function fliegen(){
        $this->flugstunden = $this->flugstunden + 400;
    }
}

$flugzeug = new Flugobjekt();
$flugzeug->fluegel ="groß";
$flugzeug->farbe ="weiß";
$flugzeug->fliegen();

echo "Die Farbe des Flugzeugs ist: " . $flugzeug->farbe . "\n";
echo "Die Flügel des Flugzeugs ist: " . $flugzeug->fluegel . "\n";
echo "Die aktuellen Flugstunden sind: " .$flugzeug->flugstunden."\n";
