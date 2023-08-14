<?php

class Car
{
    public $color;
    public $manifacturer;

    const MANIFACTURER_BMW = 'BMW';
    const MANIFACTURER_TESLA = 'tesla';
    const MANIFACTURER_MERCEDES = 'mercedes';

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $manifacturer)
    {
        $this->color = $color;
        $this->manifacturer = $manifacturer;
    }
}

$myCar = new Car(color: Car::COLOR_GREEN,manifacturer: Car::MANIFACTURER_BMW);

var_dump($myCar);
