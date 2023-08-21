<?php

namespace TheCodeholic\sub1\sub2\sub3{                 //not recocomended single file multiple name space however the structre respectively
	

class userDependencyCodeHolic
{
	public function __construct() { 
		echo "ns1";    
	}
}
}

namespace ns2{
	
class User{

public function __construct(){
	echo "ns2";
}
}
}