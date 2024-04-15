<?php
// Benutzereingabe für die Zahl
echo "Bitte geben Sie eine Zahl ein: ";
$zahl = readline();

// Schleife, die die Zahlen von 1 bis zur eingegebenen Zahl ausgibt
echo "Schleife a): ";
for ($i = 1; $i <= $zahl; $i++) {
    echo $i . " ";
}

// Leerzeile für Trennung
echo "\n";

// Schleife, die die geraden Zahlen von 1 bis zur eingegebenen Zahl ausgibt
echo "Schleife b): ";
for ($i = 2; $i <= $zahl; $i += 2) {
    echo $i . " ";
}

// Leerzeile für Trennung
echo "\n";

// Schleife, die die Zahlen von der eingegebenen Zahl bis 1 rückwärts ausgibt
echo "Schleife c): ";
for ($i = $zahl; $i >= 1; $i--) {
    echo $i . " ";
}
