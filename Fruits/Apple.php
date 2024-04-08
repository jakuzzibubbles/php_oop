<?php

include_once("Fruit.php");

class Apple extends Fruit{


    function message()
    {
        echo"Ich bin ein Apfel.";
    }
}

$ap = new Apple();
$ap->message();