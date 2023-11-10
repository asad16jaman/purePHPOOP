<?php 

    
class MyName{
    private $name = "asad";
    private $roll = 1245;


    function __get($propertyName){
        echo $propertyName . " is private property and cannot acces outside class";
    }

    function __set($p,$v){
        if(property_exists($this,$p)){
            $this->$p = $v;
        }else{
            echo "there is some problame";
        }

    }

    function __call($mname,$arr){
        if(method_exists($this,$mname)){
           $this->myname1($arr);
        }else{
            echo "this method is not define...";
        }
        
    }

    private function myname1(){
        var_dump(func_get_args());
    }

    function __isset($pr){
        echo "call hoace";
    }



}


$ob = new MyName();

$ob->isset("hoe");



?>