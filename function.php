<?php
function findMinArrIndex($array)
{
    $min = findMinArr($array);
    $length = count($array);
    $index = [];
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $min) {
            array_push($index, $i);
        }
    }
    return $index;
}

function findMinArrTimes($array)
{
    $min = findMinArr($array);
    $times = 0;
    foreach ($array as $value) {
        if ($value == $min) {
            $times++;
        }
    }
    return $times;
}

function findMinArr($array)
{
    $min = [0];
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}