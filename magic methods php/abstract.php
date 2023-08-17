<?php
abstract class shape
{
    public $color;

    abstract public function getArea(): float;

    public function __construct($color)
    {
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}
class traingle extends shape
{
    public function getArea(): float
    {

    }
}
class circle extends shape
{
    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }
    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}
class rectangle extends shape
{
    public $width;
    public $height;

    public function __construct($color,$width,$height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}

$t = new rectangle(color: "red", width: 10, height: 5);
$circle = new circle(color: "yellow", radius: 5);
echo $t->getArea().PHP_EOL;
echo $circle->getArea();