<?php

use car as GlobalCar;

class car
{
    private $color = 'red';
    private $weight = 1500;
    static $counter = 0;
    public $mycounter = 0;
    static private $availableColor = [
        'red', 'blue', 'white', 'orange'
    ];
    public function __construct()
    {
        //1.static properties you can write through class name or self keyword
        //2. You shoudnot use here(->) arrow ,You should use here (::) colon
        self::$counter++;
        $this->mycounter++;
    }
    public static function getColor()
    {
        return car::$availableColor;
    }
}
$car  = new car();
echo $car::$counter . ' ' . $car->mycounter . '<br>';
$car2 = new car();
echo $car2::$counter . ' ' . $car2->mycounter . '<br>';


var_dump(car::getColor());
