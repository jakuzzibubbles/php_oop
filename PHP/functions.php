<?php
// Funktion a) - Summe zweier Zahlen
function summe($zahl1, $zahl2) {
    return $zahl1 + $zahl2;
}

// Funktion b) - Prüfung auf gerade oder ungerade Zahl
function geradeOderUngerade($zahl) {
    if ($zahl % 2 == 0) {
        return "Die Zahl ist gerade";
    } else {
        return "Die Zahl ist ungerade";
    }
}

// Benutzereingaben für die Zahlen
echo "Bitte geben Sie die erste Zahl ein: ";
$zahl1 = trim(fgets(STDIN));

echo "Bitte geben Sie die zweite Zahl ein: ";
$zahl2 = trim(fgets(STDIN));

// Test der Funktion a) - Summe
$ergebnis_a = summe($zahl1, $zahl2);
echo "Ergebnis der Summe: $ergebnis_a\n";

// Benutzereingabe für eine weitere Zahl
echo "Bitte geben Sie eine weitere Zahl ein: ";
$zahl3 = trim(fgets(STDIN));

// Test der Funktion b) - Gerade oder ungerade
$ergebnis_b = geradeOderUngerade($zahl3);
echo "Ergebnis der Prüfung: $ergebnis_b\n";
