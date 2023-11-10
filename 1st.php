<?php 

class father{
    public $name,$body_color,$hight;
    function __construct($myname="",$color="",$h=""){
        echo "constructor with perameter is called<br>";
        $this->name=$myname;
        $this->body_color = $color;
        $this->hight = $h;
    }

    function fdetail(){
        return 'Name is : '.$this->name." color is : ".$this->body_color." height is : ".$this->hight.'<br>';
    }

    function farmerwork(){
        return "i can work all kind of think related farming..<br>";
    }
}

class son extends father{
    public $education,$f_game;
    function __construct($name,$color,$hight,$edu,$game){
        $this->name=$name;
        $this->body_color = $color;
        $this->hight = $hight;
        $this->education = $edu;
        $this->f_game = $game;
    }

   
    function education(){
        return "i am educated persion from daffodile international university..<br>";
    }
    function sonwork(){
        return "i can do web application<br>";
    }
}


$ob1 = new father("mokbul","white",5.6);
// echo $ob1->fdetail();
// echo $ob1->farmerwork();
var_dump($ob1);
echo "<hr>bellow all work is for son<br>";

$sob = new son("asad","white",5.7,"Bsc","cricket");
// echo $sob->fdetail();
// echo $sob->farmerwork();
// echo $sob->education();
// echo $sob->sonwork();
var_dump($sob);




?>