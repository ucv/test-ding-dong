<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 31-Aug-18
 * Time: 19:54
 */

function test($number){
    return (int)strrev((string)$number);
}
echo test(1234);