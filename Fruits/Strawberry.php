<?php

include_once("Fruit.php");
class Strawberry extends Fruit {

        function message ()
        {
            echo "Ich bin eine Erdbeere.";
        }
}
$strawberry = new Strawberry();
$strawberry->message();