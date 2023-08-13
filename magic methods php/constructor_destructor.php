<?php

class Car
{
    private $color = 'red';
    private $weight = 2000;

    public function __construct($color,$weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getColor(){
        return $this->color;
        
    }

    public function __destruct()
    {
        echo "I am destroyed ".$this->color.PHP_EOL;
    }

}

$car = new Car(color: 'green', weight: '500');
echo $car->getColor().PHP_EOL;
$car2 = new Car(color: 'red', weight: '500');
echo $car2->getColor().PHP_EOL;
unset($car);
sleep(2);
?>