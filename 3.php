<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 14:20
 */
$arr = array(26, 17, 136, 12, 79, 15);

$result = 0;
$square = 0;

foreach ($arr as $key){
    $square = $key * $key;
    $result += $square;
}

echo $result;