<?php
trait DroneTrait{
    private $maxFlyingSpeed = 0;
    protected $maxFlyingTime;

    public function __construct($maxFlyingSpeed, $maxFlyingTime)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
        $this->maxFlyingTime = $maxFlyingTime;
    } 

	function getMaxSpeed() { 
 		return $this->maxFlyingSpeed; 
	} 

	function setMaxSpeed($maxFlyingSpeed) {  
		$this->maxFlyingSpeed = $maxFlyingSpeed; 
	} 

	function getMaxFlyingTime() { 
 		return $this->maxFlyingTime; 
	} 

	function setMaxFlyingTime($maxFlyingTime) {  
		$this->maxFlyingTime = $maxFlyingTime; 
	} 
}

class Drone
{
    use DroneTrait;

    public $cameraResolution;

    public function __construct($maxFlyingSpeed, $maxFlyingTime, $cameraResolution)
    {
        $this->maxFlyingSpeed = $maxFlyingSpeed;
        $this->maxFlyingTime = $maxFlyingTime;
        $this->cameraResolution = $cameraResolution;

        function getCameraResolution() { 
            return $this->cameraResolution; 
       } 
   
       function setCameraResolution($cameraResolution) {  
           $this->cameraResolution = $cameraResolution; 
       } 
    }

    
}





	
