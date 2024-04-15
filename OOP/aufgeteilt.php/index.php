<?php

include_once 'person.php';
include_once 'student.php';
include_once 'rechteck.php';

//$person1 = new Person("Max", 25);
//$person1->alter_erhoehen(10);
//var_dump($person1);

/**$student1 = new Student("Anna", 20);
$student1->set_studiengang("Informatik");
$student1->alter_erhoehen(5,);
var_dump($student1);
*/



//$student->alter_erhoehen(5);
//var_dump($student1);

$rechteck = new Rechteck(5, 10);
echo "Flächeninhalt: " . $rechteck->berechne_flaecheninhalt() . "\n";
echo "Umfang: " . $rechteck->berechne_umfang() . "\n";


// 1. anlegen 10 studenten mit der hilfe einer for-schleife
// 2. diese studenten sollen in einem array gespeichert werden
// 3. mit hilfe einer foreach-schleife das array mit den 10 studis ausgeben


$studenten = [];

// 1. Anlegen von 10 Studenten mit Hilfe einer for-Schleife
for ($i = 1; $i <= 10; $i++) {
    $student = new Student("Informatik", 4); // Annahme: Alle Studenten studieren Informatik und haben 4 Jahre studiert
    $student->name = $student->set_zufaelligen_namen();
    $student->alter = rand(25, 40);
    $studenten[] = $student; // Hinzufügen des Studenten zum Array
}

// 3. Ausgabe der Studenten mit Hilfe einer foreach-Schleife
foreach ($studenten as $student) {
    echo "Name: {$student->name}, Alter: {$student->alter}, Studiengang: {$student->studiengang}\n";
}

