<?php
require_once 'Penguin.php';
require_once 'Bird.php';
require_once 'Duck.php';

$bird = new Bird();
$bird->fly();

$penguin = new Penguin();
$penguin->swim();

$duck = new Duck();
$duck->fly();
$duck->swim();

var_dump(canFly($bird));
var_dump(canFly($penguin));
var_dump(canFly($duck));


function canFly($object)
{
    if($object instanceof FlyableInterface){
        return true;
    }
    return false;
}