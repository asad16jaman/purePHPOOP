<?php

interface A{
    // public $name,$home;
    function fstInt();
}

interface B{
    // public $age,$roll;
     function sndII();
    function hlo();
}


class my implements A,B{
    public $name,$home,$age,$roll;
    function __construct($name="",$home="nil",$age="23",$roll="1245"){
        $this->name = $name;
        $this->home = $home;
        $this->age = $age;
        $this->roll = $roll;
    }
     function fstInt(){
        return "it is come from A <br>";
     }
     function sndII(){
        return "it is come from B function <br>";
     }
     function hlo(){}


}

$ob = new my("asad","nilphamari");

var_dump($ob);



?>