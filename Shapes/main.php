<?php

require_once 'Rectangle.php';
require_once 'Square.php';

// Create instances of Rectangle and Square
$rectangle = new Rectangle(4, 6);
//$square = new Square(5);
$rectangle2 = new Rectangle(5, 7);

// Calculate and display the area of the rectangle
$rectangleArea = $rectangle->area();
echo "Area of the rectangle: $rectangleArea\n";

// Calculate and display the area of the square
//$squareArea = $square->area();
//echo "Area of the square: $squareArea\n";

$rectangleArea2 = $rectangle2->area();
echo "Area of the rectangle: $rectangleArea2\n";

$lehrer = new Lehrer("Paul", 60);
$busfahrer = new Busfahrer("Eddy", 78);
$busfahrer2 = new  Busfahrer("Heiko", 66);

$derbusfahrerspricht = $busfahrer->sprechen("Hallo"."\n\r");
// $derbusfahrerspricht = "Eddy: Hallo"
$derbusfahrerspricht = "ich wurde überschrieben"."\n\r";
echo $derbusfahrerspricht;

$busfahrer2->sprechen2("Tschüss");








