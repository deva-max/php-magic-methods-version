<?php

class Robot
{
    private $maxRunningSpeed = 0;

    private $maxWalkingTime;

    public function __construct($maxRunningSpeed, $maxWalkingTime)
    {
        $this->maxRunningSpeed = $maxRunningSpeed;
        $this->maxWalkingTime = $maxWalkingTime;
    }

    public function getMaxSpeed() { 
        return $this->maxRunningSpeed; 
   } 

   public function setMaxSpeed($maxRunningSpeed) {  
       $this->maxRunningSpeed = $maxRunningSpeed; 
   }
   public function getMaxWalkingTime() { 
    return $this->maxWalkingTime; 
    } 

public function setMaxWalkingTime($maxWalkingTime) {  
   $this->maxWalkingTime = $maxWalkingTime; 
} 

}

	

	
