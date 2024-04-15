<?php

class Rechteck {
    public $breite;
    public $hoehe;

    public function __construct($breite, $hoehe) {
        $this->breite = $breite;
        $this->hoehe = $hoehe;
    }

    public function berechne_flaecheninhalt() {
        return $this->breite * $this->hoehe;
    }

    public function berechne_umfang() {
        return 2 * ($this->breite + $this->hoehe);
    }
}
