<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 14:00
 */

$arr = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
];

foreach ($arr as $key => $value){
    echo $key . ' - зарплата ' . $value . ' долларов.' . '<br>';
}