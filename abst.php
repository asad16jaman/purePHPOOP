<?php 
 abstract class gibon{
    public $eat,$nedOxigen,$widHit;
    function __construct($eat="",$ox=true,$widHit="20"){
        $this->eat = $eat;
        $this->nedOxigen = $ox;
        $this->widHit = $widHit;
    }
    function gibdetail(){
        return "it is abstruct function and good <br>";
    }

     abstract protected function fun(); 
 }





class paki extends gibon{
    public function fun(){
        return "it is come from construct and define in paki";
    }
    function detail(){
        return "You are paki ane you eat : ".$this->eat." you need oxigen " . " Your height is : ".$this->widHit. " <br>";
    }
}





$p1 = new paki("foring");
echo $p1->gibdetail();
echo $p1->detail();
var_dump($p1);






?>