<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 31-Aug-18
 * Time: 19:40
 */

for ($i = 1; $i < 70; $i++){
    if($i % 3 == 0){
        echo 'Ding';
    }else if($i % 5 == 0){
        echo 'Dong';
    }else if($i % 3 == 0 && $i % 5 == 0){
        echo "DingDong";
    }else{
        echo $i;
    }
}