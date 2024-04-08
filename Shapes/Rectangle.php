<?php

require_once 'Shape.php';

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}


class Lehrer extends Mensch {
    protected $name;
    protected $gewicht;

    public function __construct($name, $gewicht) {
        $this->gewicht = $gewicht;
        $this->name = $name;
    }

    public function liestVor() {
       echo "Lesen";
    }
}


class Busfahrer extends Mensch {
    protected $name;
    protected $gewicht;

    public function __construct($name, $gewicht) {
        $this->gewicht = $gewicht;
        $this->name = $name;
    }

    public function fährtVor() {
       return "Es geht los!";
    }

    public function stoppt(){
        return "Wir halten.";
    }

    public function sprechen($text){
        return $this->name.":". $text;
    }

    public function sprechen2($text){
        echo $this->name.":". $text;
    }
}

