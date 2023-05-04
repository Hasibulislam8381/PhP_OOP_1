<?php
class color
{
    public $hair = 'black';
    public $nose;
    public $skin;
}
$color =  new color();
$color2 =  clone $color;//$color2 = $color(actually works like a pointer)
                        //$color2 = &$color(same like 1st one works like a pointer)
$color->hair = 'green';

echo '<pre>';
var_dump($color2);
var_dump($color);
echo '</pre>';
