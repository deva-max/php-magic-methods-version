<?php
class Person
{
    public $name = 'john';
    private $phone = 123456789;

    public function __call($name, $arguments)
    {
        if($name === 'getMobilePhone'){
            return $this->getPhone();
        }else if($name === 'setMobilePhone'){
            //$this->setPhone($arguments[0]);
            call_user_func_array([$this,'setPhone'],$arguments);
        }
    }

    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone = $phone;
    }
    
}
$p = new Person();

echo $p->getMobilePhone();
echo $p->setMobilePhone('1111111').PHP_EOL;
echo $p->getMobilePhone();

