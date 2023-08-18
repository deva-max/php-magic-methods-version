<?php
require_once 'SwimmableInterface.php';
class Penguin{
    public function swim(){
        echo 'I am penguion. I am swimming ' . __METHOD__ . PHP_EOL;
    }
}