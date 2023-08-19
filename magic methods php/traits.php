<?php

trait EngineTrait{
    public function hello(){
        echo "I have an engine";
    }
}

trait FlyableTrait{
    //abstract public function fly();
    public function hello(){
        echo "I can fly";
    }
}

// trait FlyableTrait{
//     public function fly(){
//         echo "I am flying";
//     }
// }

class plain
{
    use EngineTrait, FlyableTrait{
        FlyableTrait::hello insteadOf EngineTrait;
        EngineTrait::hello as engineHello;
    }

    // public function fly()
    // {
    //     echo "I am flying at 800 km/h speed";   
    // }
}
// class Helicopter
// {
//     use EngineTrait, FlyableTrait;

//     public function fly()
//     {
//         echo "I am flying at 300 km/h speed";   
//     }
// }

$plain = new Plain();
//$helicopter = new Helicopter();
$plain->hello();
//$helicopter->fly();
$plain->engineHello();
