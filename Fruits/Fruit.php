<?php

class Fruit {
    public $name;

    public $color;



    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}

$apple = new Fruit();
$banne = new Fruit();


//BAD
//$apple->name = "Boskop";
//$apple->setName("Boskop ");
//echo $apple->getName();

//$apple->setColor("rot");
//echo $apple->getColor();