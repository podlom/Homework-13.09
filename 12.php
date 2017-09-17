<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 17:00
 */

$num = 1000;
$cycle = 0;
while($num > 50){
    $num /= 2;
    $cycle++;
}

echo $cycle . '<br>';
echo $num;