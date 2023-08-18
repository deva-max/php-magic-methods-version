<?php
require_once 'FlyableInterface.php';
require_once 'SwimmableInterface.php';

class Duck implements FlyableInterface,SwimmableInterface
{
    public function fly(){
        echo "I am Duck. I am flying " . __METHOD__ . PHP_EOL;
    }
    public function swim(){
        echo "I am Duck. I am swimming " . __METHOD__ . PHP_EOL;
    }
}