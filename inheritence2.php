<?php

class Boss
{
    public $name;
    protected $age;
    private $salary;
    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function hello()
    {
        echo "Hello From Person";
    }
}

class Employee extends Boss
{
    private $phone;
    public function __construct($name, $age, $salary, $phone)
    {
        parent::__construct($name, $age, $salary);
        $this->phone = $phone;
    }
    public function hello()
    {
        echo "Hello From $this->name";
    }
}

$employee = new Employee('Himi', 17, 100000, 4323134);
$employee->hello();
