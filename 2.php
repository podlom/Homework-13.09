<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 12:52
 */

$arr = array(1, 20, 15, 17, 24, 35);

$result = 0;

foreach ($arr as $key){
    $result += $key;
}

echo $result;


