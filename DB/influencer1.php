<?php

class Influencer {
    public $mysqli;
    function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "demo2");

        if($this->mysqli->connect_error){
            die("Connection Error");
        }
    }

    function fetch_data() {
        $sql = "SELECT full_name, followers_count, location FROM mock_data LIMIT 3";
        $result = $this->mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            printf("Name: %s, Followers: %s, Location: %s ", $row["full_name"], $row["followers_count"], $row["location"]);
        }
    }
}

$influencer = new Influencer();
$influencer->fetch_data();
