<?php

include_once 'functions.php';
include_once 'person.php';

class Student extends Person {

    public $studiengang;
    public $studienjahre;

    public function __construct($studiengang, $studienjahre) {

        $this->studiengang = $studiengang;
        $this->studienjahre = $studienjahre;
    }


    public function set_studiengang($studiengang) {
        $this->studiengang = $studiengang;

    }

    public function alter_erhoehen($wert) {
        $this->alter += $this->studienjahre;
    }

// Zufälligen Namen setzen und ausgeben
    public function set_zufaelligen_namen() {
        $namen = array("Max", "Anna", "Tom", "Lena", "Paul", "Sarah", "Mark", "Emily", "David", "Julia");
        $zufaelliger_name = $namen[rand(0, count($namen) - 1)];
        $this->name = $zufaelliger_name;
        return $zufaelliger_name;
    }

}



