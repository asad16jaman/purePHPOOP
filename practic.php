<?php declare(strict_types=1);

// abstract class Ab{
//     public $name,$roll;
//     function __construct(string $name,int $roll){
//         $this->name = $name;
//         $this->roll = $roll;
//     }

//     abstract protected function detail():string;
//     public function myname(){
//         return "i am from abstruct function";
//     }
// }

// class Mycls extends Ab{
//     function fff(){
//         return "i am from abstruct function";
//     }

//     public function detail():string{
//         return "i am abstruct function returned fro Ab";
//     }
//     public function about(){
//         return "my name is : ".$this->name." roll is : ".$this->roll;
//     }
// }


// interface Calculator{
//     public function sum(int $num1, int $num2):int;
//     public function sub(int $num1, int $num2):int;
// }

// interface Nature{
//      function sumDetail():string;
//      function subDetail():string;
// }

// class TstInterface implements Calculator,Nature{
//      protected static $motiv = "my moteve is good";
//     private $name,$roll;
//     function __construct(string $name,int $n2){
//         $this->name=$name;
//         $this->roll=$n2;
//     }
//     function sum(int $num1, int $num2):int{
//         return $num1 + $num2;
//     }
//     function sub(int $num1, int $num2):int{
//         return $num1 - $num2;
//     }
//     function sumDetail():string{
//         return "it is take two number and give sum of them";
//     }
//     function subDetail():string{
//         return "it is take two number and give sub of them";
//     }

//     function detail(){
//         return "my name is : ".$this->name." my roll is : ".$this->roll." static var : ".self::$motiv;
//     }

// }


trait Sum{
    public $num1,$num2;
    public function sumNum(){
        return $this->num1 + $this->num2;
    }
}

trait Div{
    public $num3,$num4;
    public function divNum(){
        return $this->num3 - $this->num4;
    }
    function subDetail():string{
        return "it is take two number and give sub of them";
    }
}

class AB{
    function __construct(int $n1,int $n2,int $n3,int $n4){
        $this->num1=$n1;
        $this->num2=$n2;
        $this->num3=$n3;
        $this->num4=$n4;
    }
    use Sum,Div;
}

$ob = new AB(5,6,9,2);

echo $ob->sumNum()."<br>";
echo $ob->subDetail()."<br>";
echo $ob->divNum()."<br>";

echo __FILE__."<br>";









?>