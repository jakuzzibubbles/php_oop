<?php

class Influencer {
    public $full_name;
    public $followers_count;
    public $location;
    public $mysqli;

    function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "demo2");

        if($this->mysqli->connect_error){
            die("Connection Error");
        }
    }

    function select($full_name, $followers_count, $location) {
        $this->full_name = $full_name;
        $this->followers_count = $followers_count;
        $this->location = $location;
    }
}


$mysqli = new mysqli("localhost", "root", "", "demo2");


if ($mysqli->connect_error) {
    die("Connection Error: " . $mysqli->connect_error);
}

$sql = "SELECT full_name, followers_count, location FROM mock_data LIMIT 3";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $social = new Influencer();
        $social->select($row["full_name"], $row["followers_count"], $row["location"]);
        echo "Name: " . $social->full_name . ", Follower: " . $social->followers_count . ", Location: " . $social->location . "\n";
    }
} else {
    echo "No data found.";
}