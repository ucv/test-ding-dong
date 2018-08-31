<?php
/**
 * Created by PhpStorm.
 * User: uvale
 * Date: 31-Aug-18
 * Time: 19:46
 */

function test($string){
    return ucwords(implode(' ',preg_split('/(?=[A-Z])/', $string)));
}
echo test('mamaAreMere');
