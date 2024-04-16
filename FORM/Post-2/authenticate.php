<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
</head>
<body>

<?php
$valid_username = "benutzer";
$valid_password = "passwort";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && $password === $valid_password) {
        echo "Anmeldung erfolgreich! Willkommen, $username!";
    } else {
        echo "Ungültige Anmeldeinformationen. Bitte versuchen Sie es erneut.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>

</body>
</html>
