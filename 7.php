<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 14:25
 */

$arr = [
    2,
    5,
    9,
    15,
    0,
    4
];

foreach ($arr as $key){
    if ($key > 3 and $key < 10){
        echo $key;
    }
}