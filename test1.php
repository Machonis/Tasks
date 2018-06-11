<?php
$array=[1,2,3,4,5];
foreach ($array as $item) {
    $array[0] = 41;
}
var_dump($array);