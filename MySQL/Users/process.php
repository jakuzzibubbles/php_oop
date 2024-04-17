<?php
include("config.php");

class Influencer {
    public $userData;

    public function __construct($user) {
        $this->userData = $user;

    }
}
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

$id = $_GET['user_id'];
$user;

$sql = "SELECT * FROM mock_data WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user = new Influencer($row);
    }
} else {
    echo "No data found.";
}

?>

<html>
<head>
    <title>User Data</title>
</head>
<body>
    <form action="">
        <label for="first_name">Vorname:</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $user->userData["first_name"]; ?>"><br>
        <label for="last_name">Nachname:</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $user->userData["last_name"] ?>"><br>
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $user->userData["gender"]?>"><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $user->userData["email"]?>"><br>
        <label for="ip_address">IP:</label>
        <input type="text" id="ip_address" name="ip_address" value="<?php echo $user->userData["ip_address"]; ?>"><br>
    </form>
</body>
</html>

