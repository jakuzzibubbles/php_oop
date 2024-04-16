<?php

class Mysql
{
    public $mysqli;

    function __construct(){

        //Connection DB

        $this->mysqli = new mysqli("localhost", "root", "", "flight_logs");

        if($this->mysqli->connect_error){
            die("Connection Error");
        }
    }

     function select ($table, $where=''){

        if($where != '')
        {
            echo $sql = "SELECT * FROM ".$table." ".$where;
        }else{
            echo $sql = "SELECT * FROM ".$table;
        }

        $res = $this->mysqli->query($sql);

        while ($row = $res->fetch_assoc()) {

            $dataArray[] = $row;
        }

        return $dataArray;
     }

    //Update ($data, $where)
    //Delete ($where)


}

