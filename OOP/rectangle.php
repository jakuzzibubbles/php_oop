<?php

class Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculate_area() {
        return $this->width * $this->height;
    }

    public function calculate_perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

$rectangle = new Shape(5, 10);
echo "Area of the rectangle: " . $rectangle->calculate_area() . "\n";
echo "Perimeter of the rectangle: " . $rectangle->calculate_perimeter() . "\n";

