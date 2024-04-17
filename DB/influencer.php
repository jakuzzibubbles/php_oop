<?php

class Influencer {
    public $full_name;
    public $followers_count;
    public $location;

    public function __construct($full_name, $followers_count, $location) {
        $this->full_name = $full_name;
        $this->followers_count = $followers_count;
        $this->location = $location;
    }
}

include("config.php");

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}


$sql = "SELECT full_name, followers_count, location FROM mock_data LIMIT 23";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $social = new Influencer ($row["full_name"], $row["followers_count"], $row["location"]);
        echo "Name: " . $social->full_name . ", Follower: " . $social->followers_count . ", Location: " . $social->location . "\n";
    }
} else {
    echo "No data found.";
}
