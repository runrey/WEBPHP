<?php

class Users
{
    public $name, $surname, $email, $phone, $type, $properties;

    public function __construct($name, $surname, $email, $phone){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getType(){
        return $this->type;
    }

    public function getProps(){
        return $this->properties;
    }
}
class Lite extends Users{
    public function __construct($name, $surname, $email, $phone)
    {
        $this->type = "Lite 30";
        $this->properties = "Internet 30 Mb/s";
        parent::__construct($name, $surname, $email, $phone);
    }

    public function desc(){
        print "Not so fast speed, but save your money";
    }
}

class Optimal extends Users{
    public function __construct($name, $surname, $email, $phone)
    {
        $this->type = "Optimal 60";
        $this->properties = "Internet 60 Mb/s + TV";
        parent::__construct($name, $surname, $email, $phone);
    }

    public function desc(){
        print "Balance between economy and internet speed with bonus TV";
    }
}

class Ultra extends Users{
    public function __construct($name, $surname, $email, $phone)
    {
        $this->type = "Ultra 100";
        $this->properties = "Internet 100 Mb/s + TV + smartbox";
        parent::__construct($name, $surname, $email, $phone);
    }

    public function desc(){
        print "The fastest internet speed and with awesome bonuses such as TV with smartbox";
    }
}