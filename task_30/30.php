<?php

function average($num)
{
    if (empty($num)) {
        return null;
    }
    $res = array_sum($num) / count($num);
    return $res;
}

echo average([-3, 4, 2, 10]);