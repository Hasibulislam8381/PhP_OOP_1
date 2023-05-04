<?php
//Its called magic method because magic method is executed automatically by the php engine itself
//__toString() method
class Person
{
    public $name = 'Himel';
    private $phone = 1234;
    public function __toString()
    {
        return "Name:$this->name  Phone: $this->phone <br>";
    }
}
$person = new Person();
echo $person;
//__get() method (__get method execute when the undefined properties is called from object)
class Student
{
    public $name = 'Saniya';
    private $phone  = 2355;
    public function __get($property)
    {
        if ($property == 'username') {
            return $this->name;
        }
        return "Property doesnot exist";
    }
}
$student = new student();
echo $student->username . "<br>";
//__set method(__set method execute when the undefined properties and values is called from object)

class Student2
{
    public $name = 'Mirza';
    private $phone = 123;
    public function __set($name, $value)
    {
        if ($name = 'username') {
            return $this->name = $value;
        }
    }
}
$stu2 = new Student2();
$stu2->username = 'Manna';
echo $stu2->name . '<br>';

//__call method in php(__call method execute when the undefined method is called from object)

class Student3
{
    public $name = 'Rose';
    public $phone = 5673;
    public function __call($name, $arguments)
    {
        if ($name == 'getPhone') {
            return $this->name;
        }
        return "Method Does not exist";
    }
}

$student3 = new student3();
echo $student3->getPhone() . '<br>';
//__callStatic method is work like __call method but this is static

class student4
{
    public static function __callStatic($name, $arguments)
    {
        echo "$name is a static metho<br>";
    }
}

$s = new student4;
student4::hello();

//__invoke method is used when we want to use object as method/function
class student5
{
    public function __invoke()
    {
        echo "Hello from Invoke<br>";
    }
}
$std = new student5();
echo $std();
//__sleep method and wakeup
class people
{
    public $name;
    private $phone;
    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
    public function __sleep()
    {
        unset($this->phone);
        return ['name'];
    }
    public function __wakeup()
    {
        echo "I am waking up<br>";
    }
}
$p = new people(name: 'Jini', phone: 4522);
//serialize data means to convert a value to a sequence of bits,so that it can be stored in  a file or memory buffer
//serialize convert the object into string 
$serialized =  serialize($p);
//unserialize convert the string into object(new)
$newPerson = unserialize($serialized);


//clone magic method in PhP
class Robo
{
    public $name;
    private $num;
    static $counter;
    public function __construct($name, $num)
    {
        $this->name = $name;
        $this->num = $num;
        self::$counter++;
    }
    public function __clone()
    {
        self::$counter++;
    }
    public function __wakeup()
    {
        self::$counter++;
    }
}
$robo = new Robo(name: 'Sabana', num: 23532);
$r = clone $robo;
$wak = unserialize(serialize($robo));
echo '<pre>';
var_dump($robo, $r, $wak);
echo '</pre>';
echo $robo::$counter;
