<?php

include_once 'functions.php';

class Person {
    public $name;
    public $alter;

    public function __construct($name, $alter) {
        $this->name = $name;
        $this->alter = $alter;
    }

    public function alter_erhoehen($wert) {
        $this->alter += $wert;
    }
}

