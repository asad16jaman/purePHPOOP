<?php declare(strict_types=1);
   class myStatic{

     static $myname = "this is static variable";
    protected $game,$video,$hour;
    function __construct(string $game,array $video,int $hour){
        $this->game = $game;
        $this->video = $video;
        $this->hour = $hour;
    }

    function detail(){
        return myStatic::$myname;
    }

   }

   $ob = new myStatic("footbal",["youtube"],"1245");
   var_dump($ob);
   echo "<hr>";






?>