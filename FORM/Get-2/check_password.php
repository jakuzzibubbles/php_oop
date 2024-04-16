<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passwortüberprüfung</title>
</head>
<body>

<?php
$valid_password = "geheim";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $password = $_GET["password"];

    if (isset($password)) {
        if ($password === $valid_password) {
            echo "Passwort korrekt!";
        } else {
            echo "Falsches Passwort. Bitte versuchen Sie es erneut.";
        }
    } else {
        echo "Bitte geben Sie ein Passwort ein.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>

</body>
</html>
