<?php
    class Person
    {
        public $name = "jane";
        private $phone = 123456;

        public function __invoke()
        {
            return "Object was called as a function";    
        }
    }

    $p = new Person();
    var_dump(is_callable($p));
    echo $p();