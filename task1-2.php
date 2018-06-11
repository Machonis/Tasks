<?php
class MyClass{
    public $name;
    public $LastName;
    public $email;
    public $phone;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setLastName($LastName)
    {
        $this->LastName = $LastName;
    }

    public function getLastName()
    {
        return $this->LastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}

$ObjName=new MyClass();


