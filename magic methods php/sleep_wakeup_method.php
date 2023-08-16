<?php
    class Person
    {
        public $name;
        private $phone;

        public function __construct($name, $phone)
        {
            $this->name = $name;
            $this->phone = $phone;
        }

        public function __sleep()// Databse connection unset and clean up.
        {
            unset($this->phone);
            return ['name'];
        }

        public function __wakeup()// Database connedtion reconnection
        {
            echo "I am waking up";
        }
    }
    $p = new Person(name: "Jane", phone: '123456');
    $serialized = serialize($p);
    $unserialized = unserialize($serialized);
    var_dump($unserialized);
    //var_dump($serialized);