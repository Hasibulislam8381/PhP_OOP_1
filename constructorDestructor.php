<?php

use car as GlobalCar;

class car
{
    public $color = 'red';
    public $weight = 2000;
    //constructor is a very powerfull function it executed when the object is call .
    //In one word we can say that a constructor is automatically called when a object is created
    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getData()
    {
        return $this->color;
    }
    public function __destruct()
    {
        echo 'I am destroyed ' . $this->color . '<br>';
    }
}
$car = new car(color: 'Blue', weight: 2400);
$car2 = new car(color: 'green', weight: 2100);
echo $car->getData() . "<br>";
echo $car2->getData() . "<br>";
