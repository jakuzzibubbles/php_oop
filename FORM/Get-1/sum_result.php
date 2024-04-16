<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summe Ergebnis</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];

    if (is_numeric($number1) && is_numeric($number2)) {
        $sum = $number1 + $number2;
        echo "Die Summe von $number1 und $number2 ist: $sum";
    } else {
        echo "Ungültige Eingabe. Bitte geben Sie zwei Zahlen ein.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>

</body>
</html>
