<?php
class Parentclass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    protected const MY_CONSTANT = 'My Constant';
    public function getProperty2()
    {
        return $this->property2;
    }
}
class childClass extends Parentclass
{
    public function getProperty2()
    {
        $result = parent::getProperty2();
        return "something " . $result;
    }
    protected $property2 = '22';
    public static function getConstant()
    {
        return self::MY_CONSTANT;
    }
}
$obj = new childClass();
echo $obj->getProperty2();
echo childClass::getConstant();
