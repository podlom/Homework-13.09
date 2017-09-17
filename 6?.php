<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 14:10
 */



// not finished
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $value) {
    $en = array($key) . '<br>';
    print_r($en);
}
foreach ($arr as $key => $value) {
    echo $value . '<br>';

}
