<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 21:05
 */

$arr = [
    4,
    2,
    5,
    19,
    13,
    0,
    10
];

foreach($arr as $e){
    if($e == 2 or $e == 3 or $e == 4 ){
        echo 'Есть!';
        break;
    }
    else{
        echo 'Нет!';
        break;
    }
}
