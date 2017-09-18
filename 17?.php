<?php
/**
 * Created by PhpStorm.
 * User: Lokatyre
 * Date: 9/16/17
 * Time: 21:25
 */

$arr = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
];

$month = date('F');

foreach ($arr as $item) {
    if ($month == $item) {
        echo '<strong>' . $item . '</strong><br>';
    } else {
        echo $item . '<br>';
    }
}
