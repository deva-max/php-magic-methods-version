<?php
class Person
{
    public $name = 'john';
    public $phone = 123456789;

    // public function __toString()
    // {
    //     return "name: $this->name. phone: $this->phone";
    // }

    // public function __get($propName)
    // {
    //     if($propName === 'username'){
    //         return $this->name;
    //     }
    //     return "Property \"$propName\" does not exist";
    // }

    public function __set($propName, $value){
        if($propName === 'username'){
            $this->name = $value;
        }
    }
}
$p = new Person();
$p->username = 'john';
echo $p->name;
