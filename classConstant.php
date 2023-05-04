<?php
//class contants  are constants associated with the class
class Car
{
    public $color;
    public $manufacturer;
    const MERCEDES = 'Mercedes';
    const BMW = 'BMW';
    const TOYOTA = 'Toyota';
    const COLOR_RED = 'Red';
    const COLOR_GREEN = 'Green';
    const COLOR_BLUE = 'Blue';
    public function __construct($manufacturer, $color)
    {
        $this->manufacturer = $manufacturer;
        $this->color = $color;
    }
}
$car = new car(manufacturer: Car::TOYOTA, color: Car::COLOR_GREEN);
var_dump($car);
