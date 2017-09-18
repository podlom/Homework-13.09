<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 14:00
 */

$workers = [
    'Коля' => 200,
    'Вася' => 300,
    'Петя' => 400
];

if (!empty($workers)) {
    foreach ($workers as $workerName => $sallary){
        echo $workerName . ' - зарплата ' . $sallary . ' долларов.' . '<br>';
    }
}
