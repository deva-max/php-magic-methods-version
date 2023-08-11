<?php
class Car{
    private $color =  'default red';
    private $availableColors = ['red', 'green', 'yellow', 'blue', 'white'];

    public function setColor($color){
        if(in_array($color, $this->availableColors)){
            $this->color = $color;
        }
    }
    public function getColor(){
        return $this->color;
    }
}
$myCar = new Car();
$myCar->setColor(color: 'redd');

echo $myCar->getColor();