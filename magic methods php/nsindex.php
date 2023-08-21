<?php

//namespace ns2;   //global namespace
//use TheCodeholic\User;
//use function TheCodeholic\hello;
//use const TheCodeholic\MY_CONST;+

// php 7 befor myltiple namespace 
use \TheCodeholic\sub1\sub2\sub3\userDependencyCodeHolic as myCls;
require_once 'ns.php';

//$u = new User();

$u = new myCls();

$u = new \ns2\User();

