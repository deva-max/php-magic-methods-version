<?php 
class Person{
    public static function __callStatic($name, $arguments)
    {
        echo "\"$name\" static method was called.";
    }
}
//$p = new Person();
Person::hello();