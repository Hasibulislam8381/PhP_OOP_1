<?php

class Person
{
    public $name = 'Jeni';
    public $phone = 435242456;

    public function __call($name, $arguments)
    {
        if ($name == 'getPhone') {
            return $this->getMobilePhone();
        } elseif ($name == 'setPhone') {
            # code...
            call_user_func_array([$this, 'setMobilePhone'], $arguments);
        }
    }

    public function getMobilePhone()
    {
        return $this->phone;
    }
    public function setMobilePhone($phone)
    {
        $this->phone = $phone;
    }
}
$p = new Person();
echo $p->getPhone() . '<br>';
$p->setPhone('11111111111111');
echo $p->getPhone();
