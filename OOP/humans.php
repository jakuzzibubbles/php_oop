<?php

class Human {
    public $name;
    public $age;

    public function __construct($name = null, $age = null) {
        $this->name = $name;
        $this->age = $age;
    }

    public function set_properties($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function increase_age($value) {
        $this->age += $value;
    }
}

// Create objects
$person1 = new Human("Max", 30);
$person2 = new Human("Anna", 25);

// Print data
echo "Person 1 - Name: " . $person1->name . ", Age: " . $person1->age . "\n";
echo "Person 2 - Name: " . $person2->name . ", Age: " . $person2->age . "\n";

// Increase age
$person1->increase_age(5);
echo "New age of Person 1: " . $person1->age . "\n";

