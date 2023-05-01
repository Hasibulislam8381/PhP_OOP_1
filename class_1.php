<?php

class car
{
    public  $year;
    private $color;
    private $myColor = [
        'red', 'blue', 'black', 'green'
    ];

    public function setCar($year)
    {
        $this->year = $year;
    }
    public function getCar()
    {
        return $this->year;
    }
    public function setColor($color)
    {
        if (in_array($color, $this->myColor)) {
            $this->color = $color;
        } else {
            $this->color = "Color does not match";
        }
    }
    public function getColor()
    {
        return $this->color;
    }
}
$newCar = new car();
$newCar->setColor('gh');
echo $newCar->getcolor();
// $newCar->setCar("Model:2023");
// echo $newCar->getCar();
