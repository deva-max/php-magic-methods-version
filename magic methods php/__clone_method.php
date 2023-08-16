<?php
    class Person
    {
        public $name;
        private $phone;
        static $counter;

        public function __construct($name, $phone)
        {
            $this->name = $name;
            $this->phone = $phone;
            self::$counter++;
        }

        public function __clone()
        {
            self::$counter++;
        }
        public function __wakeup(){
            self::$counter++;
        }
    }
    $p = new Person(name: "Jane", phone: '123456');
    $newPerson = clone $p;
    $newPerson2 = unserialize(serialize($p));
    var_dump($p, $newPerson, $newPerson2);
    echo Person::$counter;
