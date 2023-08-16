<?php
class ParentClass
{
    protected const MY_CONSTANT = "MY_CONSTANT";
    
}
class childClass extends ParentClass
{
    public static function getConstant(){
        return self::MY_CONSTANT;
    }
}
//$p = new childClass;
echo childClass::getConstant();