<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 21:14
 */

$arr = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];

$sep = '';
foreach ($arr as $value) {
    echo $value;
    
    if ($value % 3 == 0) {
        $sep = '<br>';
    } else {
        $sep = ', ';
    }
    echo $sep;
}
