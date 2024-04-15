<?php

// Festlegen der Zahl
$zahl = 7; // Hier kannst du die Zahl ändern, um verschiedene Bedingungen zu testen

// Bedingung, die prüft, ob die festgelegte Zahl gleich 5 ist
echo "Bedingung a): ";
if ($zahl == 5) {
    echo "Die Zahl ist gleich 5";
} else if ($zahl > 5) {
    echo "Die Zahl ist größer als 5";
} else {
    echo "Die Zahl ist kleiner als 5";
}

// Leerzeile für Trennung
echo "\n";

// Bedingung, die prüft, ob die festgelegte Zahl gerade oder ungerade ist
echo "Bedingung b): ";
if ($zahl % 2 == 0) {
    echo "Die Zahl ist gerade";
} else {
    echo "Die Zahl ist ungerade";
}

