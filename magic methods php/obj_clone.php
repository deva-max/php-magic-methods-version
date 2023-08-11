<?php
Class Car{
    public $color = 'red';
    public $weight;
    public $year;

}

$car = new Car();

$car2 = clone $car;
$car2->color = 'green';

var_dump($car2,$car);