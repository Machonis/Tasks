<?php
class User
{
    public $name;
    public $LastName;
    public $email;
    public $phone;

    public function __construct($name, $LastName, $email, $phone)
    {
        $this->name=$name;
        $this->LastName=$LastName;
        $this->email=$email;
        $this->phone=$phone;
    }
}

$ObjName=new User('Tadas', 'Machonis', 'machonis7@gmail.com', '0930830853');
print_r($ObjName);