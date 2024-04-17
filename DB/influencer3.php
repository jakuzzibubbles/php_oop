<?php

class Influencer {
    public $full_name;
    public $followers_count;
    public $location;
    public $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "demo2");

    }

    function select($full_name, $followers_count, $location) {
        $this->full_name = $full_name;
        $this->followers_count = $followers_count;
        $this->location = $location;
    }

    function fetch_data() {
        $sql = "SELECT full_name, followers_count, location FROM mock_data LIMIT 13";
        $result = $this->mysqli->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                printf("Name: %s, Followers: %s, Location: %s ", $row["full_name"], $row["followers_count"], $row["location"]);
            }
        } else {
            echo "No data found.";
        }
    }
}

$influencer = new Influencer();
$influencer->fetch_data();
