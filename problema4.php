<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 31-Aug-18
 * Time: 19:55
 */

class Ball{
    private $ballCount;
    public function __construct()
    {
        $this->ballCount = 0;
    }
    public function FoundBall(){
        if($this->ballCount < 7){
            $this->ballCount++;
        }else{
            echo "Ai gasit mingea&quot; este afisat, iar ballCount este resetat la 0<br>";
            $this->ballCount = 0;
        }
    }
}

$ball = new Ball();
for($i = 0;$i <= 16; $i++){
   $ball->FoundBall();
}